<x-layouts.app>
@php($images = config('chateau.images'))
<main id="contenido">
 <section class="hero" id="inicio">
  <div class="hero-media"><video autoplay muted loop playsinline preload="metadata" poster="{{ asset('assets/images/WhatsApp Image 2026-09-09 at 16.33.35.jpeg') }}" aria-label="Chateau Catedral y su entorno de montaña"><source src="{{ asset('assets/images/WhatsApp Video 2026-09-09 at 16.34.09.mp4') }}" type="video/mp4"></video></div>
  <div class="hero-shade"></div>
  <div class="hero-brand"><x-logo /><p>Villa Catedral · Bariloche</p><a href="#cabana" aria-label="Conocer Chateau Catedral">Descubrir <span aria-hidden="true">↓</span></a></div>
 </section>
 <header class="site-header" data-header>
  <div class="container nav-wrap"><a href="#inicio" class="brand" aria-label="Chateau Catedral, inicio"><x-logo /></a>
   <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-nav"><span></span><span></span><span></span><span class="sr-only">Abrir menú</span></button>
   <nav id="main-nav" aria-label="Navegación principal"><a href="#cabana">La cabaña</a><a href="#comodidades">Comodidades</a><a href="#galeria">Galería</a><a href="#ubicacion">Ubicación</a><a href="#contacto">Reservar</a></nav>
  </div>
 </header>

 <section class="story-section" id="cabana"><div class="container story-grid">
  <x-image file="WhatsApp Image 2026-09-09 at 16.32.19.jpeg" alt="Living cálido de madera de Chateau Catedral" class="story-image" />
  <article class="story-card"><h1><span>01</span> La cabaña</h1><p>Ubicada en la base del Cerro Catedral, Chateau Catedral combina la calidez de la madera y la piedra con espacios pensados para descansar y compartir.</p><p>A solo 200 metros de las pistas, ofrece 150 m² cubiertos y capacidad para hasta 7 personas. Tres dormitorios en suite brindan privacidad, mientras que el living con chimenea y el quincho propio invitan a disfrutar después de un día en la montaña.</p></article>
 </div></section>

 <section class="story-section alternate" id="comodidades"><div class="container story-grid">
  <x-image file="WhatsApp Image 2026-09-09 at 16.33.06.jpeg" alt="Detalles artesanales en madera de Chateau Catedral" class="story-image" />
  <article class="story-card"><h2><span>02</span> Comodidades</h2><div class="comfort-grid">
   <div><h3>Para compartir</h3><p>Quincho propio cubierto con parrilla, cocina completa y barra con cava de vinos.</p></div>
   <div><h3>Confort</h3><p>Chimenea, piso radiante y agua caliente de alta recuperación.</p></div>
   <div><h3>Descanso</h3><p>Tres dormitorios con baño privado, jacuzzi en la suite principal y practicuna.</p></div>
   <div><h3>Servicios</h3><p>Wi-Fi, DirecTV, cambio de blancos, alarma e iluminación perimetral.</p></div>
  </div></article>
 </div></section>

 <section class="gallery" id="galeria"><div class="container"><div class="section-title"><p>03</p><div><span>Galería</span><h2>La montaña, puertas adentro</h2></div></div><div class="gallery-grid">
  @foreach($images as $index => $photo)<button type="button" class="gallery-item item-{{ $index + 1 }}" data-gallery-index="{{ $index }}" aria-label="Ampliar: {{ $photo['alt'] }}"><x-image :file="$photo['file']" :alt="$photo['alt']" /></button>@endforeach
 </div></div></section>

 <section class="story-section location" id="ubicacion"><div class="container story-grid">
  <x-image file="WhatsApp Image 2026-09-09 at 16.32.17.jpeg" alt="Sendero entre pinos cubiertos de nieve en Villa Catedral" class="story-image" />
  <article class="story-card"><h2><span>04</span> Ubicación</h2><p>Estamos en Villa Catedral, en la base del Cerro Catedral, Bariloche, a solo 200 metros de las pistas.</p><p>Un refugio privilegiado para vivir la montaña y volver caminando a la calidez de la cabaña.</p><a class="outline-link" href="https://www.google.com/maps/search/?api=1&query=Cerro+Catedral%2C+Bariloche" target="_blank" rel="noopener noreferrer">Ver la zona en Google Maps <span aria-hidden="true">↗</span></a><small>La ubicación exacta se informará al reservar.</small></article>
 </div></section>

 <section class="contact" id="contacto"><div class="container contact-inner"><p class="section-number">05</p><p class="kicker">Consultas y reservas</p><h2>Tu próxima escapada<br>empieza acá</h2><p>Consultanos por disponibilidad y tarifas para las fechas de tu viaje.</p><div class="booking-note">Para confirmar la reserva solicitamos una seña del 50 %. El saldo se abona al ingresar.</div><x-whatsapp-link>Consultar por WhatsApp</x-whatsapp-link><p class="contact-person">{{ config('chateau.contact.name') }} · <a href="tel:+5491151205507">{{ config('chateau.contact.phone') }}</a></p></div></section>
 </main>
 <footer><div class="container footer-grid"><x-logo/><p>{{ config('chateau.location') }}</p><nav aria-label="Navegación del pie"><a href="#cabana">La cabaña</a><a href="#comodidades">Comodidades</a><a href="#galeria">Galería</a><a href="#contacto">Reservar</a></nav><p>© <span data-year>{{ date('Y') }}</span> Chateau Catedral</p></div></footer>
 <x-whatsapp-link class="whatsapp-float" aria-label="Consultar disponibilidad por WhatsApp"><span class="sr-only">WhatsApp</span></x-whatsapp-link>
 <div class="lightbox" data-lightbox hidden aria-hidden="true"><div class="lightbox-backdrop" data-close></div><div class="lightbox-dialog" role="dialog" aria-modal="true" aria-label="Visor de fotografías"><button class="lightbox-close" type="button" data-close aria-label="Cerrar visor">×</button><button class="lightbox-arrow prev" type="button" data-prev aria-label="Fotografía anterior">←</button><div data-lightbox-image></div><p data-lightbox-caption></p><button class="lightbox-arrow next" type="button" data-next aria-label="Fotografía siguiente">→</button></div></div>
 <script type="application/json" id="gallery-data">{!! json_encode($images, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
</x-layouts.app>
