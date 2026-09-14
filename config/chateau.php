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
    'cabin_images' => [
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
    'apartment_images' => [
        ['file' => 'fotos departamento/Screenshot_20210620-201828_Photos.jpg', 'alt' => 'Edificio Latitud Catedral junto a la montaña'],
        ['file' => 'fotos departamento/20200730_181247.jpg', 'alt' => 'Estar y comedor del departamento'],
        ['file' => 'fotos departamento/20200730_183343.jpg', 'alt' => 'Cocina completa con barra desayunadora'],
        ['file' => 'fotos departamento/20200730_181502.jpg', 'alt' => 'Dormitorio principal amplio'],
        ['file' => 'fotos departamento/20210201_141339.jpg', 'alt' => 'Segundo dormitorio con cuatro camas'],
        ['file' => 'fotos departamento/20200730_181741.jpg', 'alt' => 'Uno de los baños completos del departamento'],
        ['file' => 'fotos departamento/20160404_173000.jpg', 'alt' => 'Pileta climatizada interior y exterior del edificio'],
        ['file' => 'fotos departamento/20160728_170043.jpg', 'alt' => 'Jacuzzi del edificio durante una nevada'],
        ['file' => 'fotos departamento/20200723_102438.jpg', 'alt' => 'Vista nevada de Villa Catedral desde el departamento'],
    ],
];
