<!doctype html>
<html lang="es-AR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chateau Catedral | Cabaña en Villa Catedral, Bariloche</title>
    <meta name="description" content="Cabaña para hasta 7 personas en Villa Catedral, a 200 metros de las pistas. Tres dormitorios en suite, jacuzzi y quincho propio. Consultá disponibilidad.">
    <meta name="theme-color" content="#253C32">
    <meta property="og:type" content="website"><meta property="og:locale" content="es_AR">
    <meta property="og:title" content="Chateau Catedral | Cabaña en Villa Catedral, Bariloche">
    <meta property="og:description" content="Cabaña para hasta 7 personas en Villa Catedral, a 200 metros de las pistas.">
    @if(file_exists(public_path('assets/images/fachada-nevada.png')))<meta property="og:image" content="{{ asset('assets/images/fachada-nevada.png') }}">@endif
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <a class="skip-link" href="#contenido">Saltar al contenido</a>
    {{ $slot }}
</body>
</html>
