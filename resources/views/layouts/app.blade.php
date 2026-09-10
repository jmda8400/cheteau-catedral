<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('site.meta.title') }}</title>
    <meta name="description" content="{{ __('site.meta.description') }}">
    <meta name="theme-color" content="#253C32">
    <meta property="og:type" content="website"><meta property="og:locale" content="es_AR">
    <meta property="og:title" content="{{ __('site.meta.title') }}">
    <meta property="og:description" content="{{ __('site.meta.short_description') }}">
    <meta property="og:image" content="{{ asset('assets/images/WhatsApp Image 2026-09-09 at 16.33.35.jpeg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&amp;family=Montserrat:wght@300;500&amp;display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <a class="skip-link" href="#contenido">{{ __('site.a11y.skip') }}</a>
    {{ $slot }}
</body>
</html>
