<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    if (! Cache::get('front_page_enabled', true)) {
        return response()->view('unavailable', status: 503)->header('Retry-After', '3600');
    }

    $supportedLocales = ['es', 'en', 'pt'];
    $locale = $request->query('lang', $request->cookie('chateau_locale', 'es'));

    if (! in_array($locale, $supportedLocales, true)) {
        $locale = 'es';
    }

    App::setLocale($locale);

    return response()
        ->view('home', compact('locale'))
        ->cookie('chateau_locale', $locale, 60 * 24 * 365);
})->name('home');

Route::get('/admin', function (Request $request) {
    return view($request->session()->get('admin_authenticated', false) ? 'admin.dashboard' : 'admin.login', [
        'frontPageEnabled' => Cache::get('front_page_enabled', true),
    ]);
})->name('admin');

Route::post('/admin/login', function (Request $request) {
    $credentials = $request->validate([
        'username' => ['required', 'string'],
        'password' => ['required', 'string'],
    ]);
    $throttleKey = 'admin-login:'.strtolower($credentials['username']).'|'.$request->ip();

    if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
        return back()->withErrors(['username' => 'Demasiados intentos. Esperá un minuto antes de volver a intentar.'])->onlyInput('username');
    }

    $valid = hash_equals((string) config('chateau.admin.username'), $credentials['username'])
        && hash_equals((string) config('chateau.admin.password'), $credentials['password']);

    if (! $valid) {
        RateLimiter::hit($throttleKey, 60);

        return back()->withErrors(['username' => 'El usuario o la contraseña no son correctos.'])->onlyInput('username');
    }

    RateLimiter::clear($throttleKey);
    $request->session()->regenerate();
    $request->session()->put('admin_authenticated', true);

    return redirect()->route('admin');
})->name('admin.login');

Route::post('/admin/site-status', function (Request $request) {
    abort_unless($request->session()->get('admin_authenticated', false), 403);
    $validated = $request->validate(['enabled' => ['required', 'boolean']]);
    Cache::forever('front_page_enabled', (bool) $validated['enabled']);

    return redirect()->route('admin')->with('status', $validated['enabled'] ? 'La página frontal está activa.' : 'La página frontal fue dada de baja.');
})->name('admin.site-status');

Route::post('/admin/logout', function (Request $request) {
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('admin');
})->name('admin.logout');
