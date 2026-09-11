<x-layouts.app>
    <main class="admin-shell">
        <section class="admin-card" aria-labelledby="dashboard-title">
            <x-logo />
            <p class="admin-eyebrow">Administración</p>
            <h1 id="dashboard-title">Página frontal</h1>

            @if(session('status'))<p class="admin-notice" role="status">{{ session('status') }}</p>@endif

            <div class="status-panel">
                <span @class(['status-dot', 'is-online' => $frontPageEnabled])></span>
                <div>
                    <strong>{{ $frontPageEnabled ? 'Página activa' : 'Página fuera de línea' }}</strong>
                    <p>{{ $frontPageEnabled ? 'Los visitantes pueden acceder al sitio.' : 'Los visitantes ven el aviso de mantenimiento.' }}</p>
                </div>
            </div>

            <form method="post" action="{{ route('admin.site-status') }}">
                @csrf
                <input type="hidden" name="enabled" value="{{ $frontPageEnabled ? 0 : 1 }}">
                <button type="submit" @class(['admin-button', 'is-danger' => $frontPageEnabled])>
                    {{ $frontPageEnabled ? 'Dar de baja la página' : 'Volver a publicar la página' }}
                </button>
            </form>

            <form method="post" action="{{ route('admin.logout') }}" class="logout-form">
                @csrf
                <button type="submit" class="text-button">Cerrar sesión</button>
            </form>
        </section>
    </main>
</x-layouts.app>
