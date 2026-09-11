<?php

return [
    'name' => 'Chateau Catedral',
    'location' => 'Villa Catedral · Bariloche',
    'contact' => ['name' => 'Felipe Scarinci', 'phone' => '+54 9 11 5120-5507'],
    'whatsapp' => 'https://wa.me/5491151205507?text='.rawurlencode('Hola Felipe, estoy interesado/a en Chateau Catedral. Quisiera consultar disponibilidad y tarifa para una estadía.'),
    'admin' => [
        'username' => env('ADMIN_USERNAME', 'felipe'),
        'password' => env('ADMIN_PASSWORD', 'scarinci'),
    ],
    'images' => [
        ['file' => 'WhatsApp Image 2026-09-09 at 16.33.35.jpeg', 'alt' => 'Fachada de Chateau Catedral cubierta de nieve'],
        ['file' => 'WhatsApp Image 2026-09-09 at 16.32.19.jpeg', 'alt' => 'Living de madera con grandes ventanales'],
        ['file' => 'WhatsApp Image 2026-09-09 at 16.32.21.jpeg', 'alt' => 'Comedor y cocina equipada de la cabaña'],
        ['file' => 'WhatsApp Image 2026-09-09 at 16.33.42.jpeg', 'alt' => 'Acceso principal entre pinos nevados'],
        ['file' => 'WhatsApp Image 2026-09-09 at 16.33.08.jpeg', 'alt' => 'Fachada y jardín de Chateau Catedral en verano'],
        ['file' => 'WhatsApp Image 2026-09-10 at 08.51.54.jpeg', 'alt' => 'Entrada de madera durante una nevada'],
        ['file' => 'WhatsApp Image 2026-09-09 at 16.33.05.jpeg', 'alt' => 'Interior de troncos con hogar a leña'],
        ['file' => 'WhatsApp Image 2026-09-09 at 16.32.22.jpeg', 'alt' => 'Fuego encendido en la chimenea'],
        ['file' => 'WhatsApp Image 2026-09-09 at 16.32.17.jpeg', 'alt' => 'Sendero entre pinos cubiertos de nieve'],
    ],
];
