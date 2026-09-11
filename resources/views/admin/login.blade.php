<x-layouts.app>
    <main class="admin-shell">
        <section class="admin-card" aria-labelledby="login-title">
            <x-logo />
            <p class="admin-eyebrow">Administración</p>
            <h1 id="login-title">Ingresar</h1>
            <p class="admin-intro">Accedé para controlar la disponibilidad de la página frontal.</p>

            <form method="post" action="{{ route('admin.login') }}" class="admin-form">
                @csrf
                <label for="username">Usuario</label>
                <input id="username" name="username" type="text" value="{{ old('username') }}" autocomplete="username" required autofocus>

                <label for="password">Contraseña</label>
                <input id="password" name="password" type="password" autocomplete="current-password" required>

                @error('username')<p class="admin-error" role="alert">{{ $message }}</p>@enderror
                <button type="submit" class="admin-button">Ingresar</button>
            </form>
        </section>
    </main>
</x-layouts.app>
