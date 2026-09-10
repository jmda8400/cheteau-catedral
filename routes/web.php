<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
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
