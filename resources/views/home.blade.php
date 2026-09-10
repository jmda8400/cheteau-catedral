<x-layouts.app>
@php($images = config('chateau.images'))
<main id="contenido">
 <section class="hero" id="inicio">
  <div class="hero-media"><video autoplay muted loop playsinline preload="metadata" poster="{{ asset('assets/images/WhatsApp Image 2026-09-09 at 16.33.35.jpeg') }}" aria-label="Chateau Catedral y su entorno de montaña"><source src="{{ asset('assets/images/WhatsApp Video 2026-09-09 at 16.34.09.mp4') }}" type="video/mp4"></video></div>
  <div class="hero-shade"></div>
  <div class="hero-brand"><x-logo /><p>Villa Catedral · Bariloche</p><a href="#cabana">{{ __('site.hero.discover') }} <span aria-hidden="true">↓</span></a></div>
 </section>
 <header class="site-header" data-header>
  <div class="container nav-wrap"><a href="#inicio" class="brand" aria-label="Chateau Catedral, inicio"><x-logo /></a>
   <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-nav"><span></span><span></span><span></span><span class="sr-only">{{ __('site.a11y.menu') }}</span></button>
   <nav id="main-nav" aria-label="{{ __('site.a11y.navigation') }}"><a href="#cabana">{{ __('site.nav.cabin') }}</a><a href="#comodidades">{{ __('site.nav.amenities') }}</a><a href="#galeria">{{ __('site.nav.gallery') }}</a><a href="#ubicacion">{{ __('site.nav.location') }}</a><x-whatsapp-link class="nav-book">{{ __('site.nav.book') }}</x-whatsapp-link></nav>
   <div class="language-picker" aria-label="{{ __('site.a11y.language') }}">@foreach(['es' => 'ES', 'en' => 'EN', 'pt' => 'PT'] as $code => $label)<a href="{{ route('home', ['lang' => $code]) }}" lang="{{ $code }}" data-language-link @class(['active' => $locale === $code]) aria-current="{{ $locale === $code ? 'page' : 'false' }}">{{ $label }}</a>@endforeach</div>
  </div>
 </header>

 <section class="story-section" id="cabana"><div class="container story-grid">
  <x-image file="WhatsApp Image 2026-09-09 at 16.32.19.jpeg" alt="Living cálido de madera de Chateau Catedral" class="story-image" />
  <article class="story-card"><h1><span>01</span> {{ __('site.cabin.title') }}</h1><p>{{ __('site.cabin.p1') }}</p><p>{{ __('site.cabin.p2') }}</p></article>
 </div></section>

 <div class="photo-divider divider-winter" role="img" aria-label="{{ __('site.dividers.winter') }}"></div>

 <section class="story-section alternate" id="comodidades"><div class="container story-grid">
  <x-image file="WhatsApp Image 2026-09-09 at 16.33.06.jpeg" alt="Detalles artesanales en madera de Chateau Catedral" class="story-image" />
  <article class="story-card"><h2><span>02</span> {{ __('site.amenities.title') }}</h2><div class="comfort-grid">
   @foreach(__('site.amenities.items') as $item)<div><h3>{{ $item['title'] }}</h3><p>{{ $item['text'] }}</p></div>@endforeach
  </div></article>
 </div></section>

 <section class="gallery" id="galeria"><div class="container"><div class="section-title"><p>03</p><div><span>{{ __('site.gallery.eyebrow') }}</span><h2>{{ __('site.gallery.title') }}</h2></div></div><div class="gallery-grid">
  @foreach($images as $index => $photo)<button type="button" class="gallery-item item-{{ $index + 1 }}" data-gallery-index="{{ $index }}" aria-label="{{ __('site.gallery.open') }}"><x-image :file="$photo['file']" :alt="$photo['alt']" /><span class="gallery-action" aria-hidden="true">↗</span></button>@endforeach
 </div></div></section>

 <div class="photo-divider divider-fire" role="img" aria-label="{{ __('site.dividers.fire') }}"></div>

 <section class="story-section location" id="ubicacion"><div class="container story-grid">
  <x-image file="WhatsApp Image 2026-09-09 at 16.32.17.jpeg" alt="Sendero entre pinos cubiertos de nieve en Villa Catedral" class="story-image" />
  <article class="story-card"><h2><span>04</span> {{ __('site.location.title') }}</h2><p>{{ __('site.location.p1') }}</p><p>{{ __('site.location.p2') }}</p><a class="outline-link" href="https://www.google.com/maps/search/?api=1&amp;query=Mart%C3%ADn+Jereb+9857%2C+San+Carlos+de+Bariloche%2C+R%C3%ADo+Negro" target="_blank" rel="noopener noreferrer">{{ __('site.location.map') }} <span aria-hidden="true">↗</span></a><small>{{ __('site.location.address') }}</small></article>
  <div class="location-map"><iframe src="https://www.google.com/maps?q=Mart%C3%ADn%20Jereb%209857%2C%20R8401%20San%20Carlos%20de%20Bariloche%2C%20R%C3%ADo%20Negro&amp;output=embed" title="{{ __('site.location.map_title') }}" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe></div>
 </div></section>

 <section class="contact" id="contacto"><div class="container contact-inner"><p class="section-number">05</p><p class="kicker">{{ __('site.contact.kicker') }}</p><h2>{!! __('site.contact.title') !!}</h2><p>{{ __('site.contact.text') }}</p><div class="booking-note">{{ __('site.contact.note') }}</div><x-whatsapp-link>{{ __('site.contact.whatsapp') }}</x-whatsapp-link><p class="contact-person">{{ config('chateau.contact.name') }} · <a href="tel:+5491151205507">{{ config('chateau.contact.phone') }}</a></p></div></section>
 </main>
 <footer><div class="container footer-grid"><x-logo/><p>{{ config('chateau.location') }}</p><nav aria-label="{{ __('site.a11y.footer_navigation') }}"><a href="#cabana">{{ __('site.nav.cabin') }}</a><a href="#comodidades">{{ __('site.nav.amenities') }}</a><a href="#galeria">{{ __('site.nav.gallery') }}</a><x-whatsapp-link class="footer-book">{{ __('site.nav.book') }}</x-whatsapp-link></nav><p>© <span data-year>{{ date('Y') }}</span> Chateau Catedral</p></div></footer>
 <div class="site-credit">Made by <a href="https://www.linkedin.com/in/juanmanueldiazarbues" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn de Juan Manuel Díaz Arbues"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M20.45 20.45h-3.56v-5.57c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.34V8.98h3.42v1.57h.05c.47-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.46v6.29ZM5.32 7.41a2.07 2.07 0 1 1 0-4.13 2.07 2.07 0 0 1 0 4.13Zm1.78 13.04H3.54V8.98H7.1v11.47ZM22.23 0H1.77C.79 0 0 .77 0 1.73v20.54C0 23.23.79 24 1.77 24h20.46c.98 0 1.77-.77 1.77-1.73V1.73C24 .77 23.21 0 22.23 0Z"/></svg></a></div>
 <x-whatsapp-link class="whatsapp-float" aria-label="Consultar disponibilidad por WhatsApp"><span class="sr-only">WhatsApp</span></x-whatsapp-link>
 <div class="lightbox" data-lightbox hidden aria-hidden="true"><div class="lightbox-backdrop" data-close></div><div class="lightbox-dialog" role="dialog" aria-modal="true" aria-label="{{ __('site.gallery.viewer') }}"><button class="lightbox-close" type="button" data-close aria-label="{{ __('site.gallery.close') }}">×</button><button class="lightbox-arrow prev" type="button" data-prev aria-label="{{ __('site.gallery.previous') }}">‹</button><div data-lightbox-image></div><button class="lightbox-arrow next" type="button" data-next aria-label="{{ __('site.gallery.next') }}">›</button></div></div>
 <script type="application/json" id="gallery-data">{!! json_encode($images, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
</x-layouts.app>
