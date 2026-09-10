# Chateau Catedral

Landing page de la cabaña Chateau Catedral, en Villa Catedral, Bariloche. Está desarrollada con Laravel 12, Blade, Tailwind CSS y Vite. El contenido principal no depende de una base de datos.

## Desarrollo local

1. Copiar `.env.example` a `.env` (nunca sobrescribir un `.env` existente).
2. Ejecutar `composer install && php artisan key:generate`.
3. Ejecutar `npm install && npm run build`.
4. Iniciar con `php artisan serve`, o usar `docker compose up --build`.

El contacto, enlace de WhatsApp y datos repetidos están centralizados en `config/chateau.php`.

## Contenido visual

Las fotografías, el video del hero y el logo de Chateau Catedral están alojados en `public/assets/images/`. La selección que alimenta la galería y sus textos alternativos se centraliza en `config/chateau.php`.
