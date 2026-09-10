# Chateau Catedral

Landing page de la cabaña Chateau Catedral, en Villa Catedral, Bariloche. Está desarrollada con Laravel 12, Blade, Tailwind CSS y Vite. El contenido principal no depende de una base de datos.

## Desarrollo local

1. Copiar `.env.example` a `.env` (nunca sobrescribir un `.env` existente).
2. Ejecutar `composer install && php artisan key:generate`.
3. Ejecutar `npm install && npm run build`.
4. Iniciar con `php artisan serve`, o usar `docker compose up --build`.

El contacto, enlace de WhatsApp y datos repetidos están centralizados en `config/chateau.php`.

## Fotografías

Los siete adjuntos indicados para el proyecto no estaban presentes en el repositorio. La página ofrece reemplazos visuales sin enlaces rotos hasta que se copien los originales a `public/assets/images/` con los nombres documentados en [`public/assets/images/README.md`](public/assets/images/README.md). No se utilizaron imágenes de terceros ni ambientes generados.

Una vez incorporados los archivos, se recomienda generar WebP/AVIF después de revisar visualmente los originales; en particular, la imagen del dormitorio ya emplea un encuadre `cover` para evitar mostrar sus franjas negras.
