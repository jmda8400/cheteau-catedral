<x-layouts.app>
@php
 $cabinImages = config('chateau.cabin_images');
 $apartmentImages = config('chateau.apartment_images');
 $images = array_merge($cabinImages, $apartmentImages);
@endphp
<main id="contenido">
 <section class="hero" id="inicio">
  <div class="hero-media"><video autoplay muted loop playsinline preload="metadata" poster="{{ asset('assets/images/WhatsApp Image 2026-09-09 at 16.33.35.jpeg') }}" aria-label="Chateau Catedral y su entorno de montaña"><source src="{{ asset('assets/images/WhatsApp Video 2026-09-09 at 16.34.09.mp4') }}" type="video/mp4"></video></div>
  <div class="hero-shade"></div>
  <div class="hero-brand"><x-logo /><p>Villa Catedral · Bariloche</p><a href="#cabanas">{{ __('site.hero.discover') }} <span aria-hidden="true">↓</span></a></div>
 </section>
 <header class="site-header" data-header>
  <div class="container nav-wrap"><a href="#inicio" class="brand" aria-label="Chateau Catedral, inicio"><x-logo /></a>
   <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-nav"><span></span><span></span><span></span><span class="sr-only">{{ __('site.a11y.menu') }}</span></button>
   <nav id="main-nav" aria-label="{{ __('site.a11y.navigation') }}"><a href="#cabanas">{{ __('site.nav.cabins') }}</a><a href="#departamento">{{ __('site.nav.apartment') }}</a><a href="#comodidades">{{ __('site.nav.amenities') }}</a><a href="#galeria">{{ __('site.nav.gallery') }}</a><a href="#ubicacion">{{ __('site.nav.location') }}</a><x-whatsapp-link class="nav-book">{{ __('site.nav.book') }}</x-whatsapp-link></nav>
   <div class="language-picker" aria-label="{{ __('site.a11y.language') }}">@foreach(['es' => 'ES', 'en' => 'EN', 'pt' => 'PT'] as $code => $label)<a href="{{ route('home', ['lang' => $code]) }}" lang="{{ $code }}" data-language-link @class(['active' => $locale === $code]) aria-current="{{ $locale === $code ? 'page' : 'false' }}">{{ $label }}</a>@endforeach</div>
  </div>
 </header>

 <section class="story-section" id="cabanas"><div class="container story-grid">
  <x-image file="WhatsApp Image 2026-09-09 at 16.32.19.jpeg" alt="Living cálido de madera de Chateau Catedral" class="story-image" />
  <article class="story-card"><h1><span>01</span> {{ __('site.cabins.title') }}</h1><p>{{ __('site.cabins.p1') }}</p><p>{{ __('site.cabins.p2') }}</p></article>
 </div></section>

 <div class="photo-divider divider-winter" role="img" aria-label="{{ __('site.dividers.winter') }}"></div>

 <section class="apartment-section" id="departamento"><div class="container">
  <div class="apartment-intro"><div><p class="section-number">02</p><span class="apartment-eyebrow">{{ __('site.apartment.eyebrow') }}</span><h2>{{ __('site.apartment.title') }}</h2><p>{{ __('site.apartment.intro') }}</p></div><x-image file="fotos departamento/20200730_181247.jpg" :alt="__('site.apartment.image_alt')" /></div>
 </div></section>

 <div class="photo-divider divider-apartment" role="img" aria-label="{{ __('site.dividers.apartment') }}"></div>

 <section class="amenities-section" id="comodidades"><div class="container"><div class="section-title"><p>03</p><div><span>{{ __('site.amenities.eyebrow') }}</span><h2>{{ __('site.amenities.title') }}</h2></div></div>
  <div class="amenities-columns">
   <article class="amenity-panel"><span class="amenity-label">{{ __('site.amenities.cabins') }}</span><div class="comfort-grid">@foreach(__('site.amenities.items') as $item)<div><h3>{{ $item['title'] }}</h3><p>{{ $item['text'] }}</p></div>@endforeach</div></article>
   <article class="amenity-panel"><span class="amenity-label">{{ __('site.amenities.apartment') }}</span><div class="apartment-details">
    <div><h3>{{ __('site.apartment.inside_title') }}</h3><ul>@foreach(__('site.apartment.inside') as $item)<li>{{ $item }}</li>@endforeach</ul></div>
    <div><h3>{{ __('site.apartment.building_title') }}</h3><ul>@foreach(__('site.apartment.building') as $item)<li>{{ $item }}</li>@endforeach</ul></div>
   </div></article>
  </div>
 </div></section>

 <div class="photo-divider divider-fire" role="img" aria-label="{{ __('site.dividers.fire') }}"></div>

 <section class="gallery" id="galeria"><div class="container"><div class="section-title"><p>04</p><div><span>{{ __('site.gallery.eyebrow') }}</span><h2>{{ __('site.gallery.title') }}</h2><p class="gallery-intro">{{ __('site.gallery.intro') }}</p></div></div>
  @foreach([[__('site.gallery.cabins'), $cabinImages], [__('site.gallery.apartment'), $apartmentImages]] as [$groupTitle, $groupImages])
   <div class="gallery-group"><h3 class="gallery-group-title"><span>0{{ $loop->iteration }}</span>{{ $groupTitle }}</h3><div class="gallery-grid">@foreach($groupImages as $groupIndex => $photo)@php($index = $loop->parent->index * count($cabinImages) + $groupIndex)<button type="button" class="gallery-item item-{{ $groupIndex + 1 }}" data-gallery-index="{{ $index }}" aria-label="{{ __('site.gallery.open') }}: {{ $photo['alt'] }}"><x-image :file="$photo['file']" :alt="$photo['alt']" /><span class="gallery-action" aria-hidden="true">↗</span></button>@endforeach</div></div>
  @endforeach
 </div></section>

 <div class="photo-divider divider-location" role="img" aria-label="{{ __('site.dividers.location') }}"></div>

 <section class="locations" id="ubicacion"><div class="container">
  <div class="section-title"><p>05</p><div><span>{{ __('site.location.eyebrow') }}</span><h2>{{ __('site.location.title') }}</h2><p class="locations-intro">{{ __('site.location.intro') }}</p></div></div>
  <div class="locations-grid">
   @foreach([
    ['key' => 'cabins', 'query' => 'Martín Jereb 9857, San Carlos de Bariloche, Río Negro'],
    ['key' => 'apartment', 'query' => 'Latitud Catedral, Villa Catedral, San Carlos de Bariloche']
   ] as $place)
    <article class="location-card"><div class="location-copy"><span class="location-type">{{ __('site.location.'.$place['key'].'.type') }}</span><h3>{{ __('site.location.'.$place['key'].'.name') }}</h3><address>{{ __('site.location.'.$place['key'].'.address') }}</address><p>{{ __('site.location.'.$place['key'].'.directions') }}</p><a class="outline-link" href="https://www.google.com/maps/dir/?api=1&amp;destination={{ urlencode($place['query']) }}" target="_blank" rel="noopener noreferrer">{{ __('site.location.directions_button') }} <span aria-hidden="true">↗</span></a></div><div class="location-map"><iframe src="https://www.google.com/maps?q={{ urlencode($place['query']) }}&amp;output=embed" title="{{ __('site.location.'.$place['key'].'.map_title') }}" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe></div></article>
   @endforeach
  </div>
 </div></section>

 <section class="contact" id="contacto"><div class="container contact-inner"><p class="section-number">06</p><p class="kicker">{{ __('site.contact.kicker') }}</p><h2>{!! __('site.contact.title') !!}</h2><p>{{ __('site.contact.text') }}</p><div class="booking-note">{{ __('site.contact.note') }}</div><x-whatsapp-link>{{ __('site.contact.whatsapp') }}</x-whatsapp-link><p class="contact-person">{{ config('chateau.contact.name') }} · <a href="tel:+5491151205507">{{ config('chateau.contact.phone') }}</a></p></div></section>
 </main>
 <footer><div class="container footer-grid"><x-logo/><p>{{ config('chateau.location') }}</p><nav aria-label="{{ __('site.a11y.footer_navigation') }}"><a href="#cabanas">{{ __('site.nav.cabins') }}</a><a href="#departamento">{{ __('site.nav.apartment') }}</a><a href="#comodidades">{{ __('site.nav.amenities') }}</a><a href="#galeria">{{ __('site.nav.gallery') }}</a><x-whatsapp-link class="footer-book">{{ __('site.nav.book') }}</x-whatsapp-link></nav><p>© <span data-year>{{ date('Y') }}</span> Chateau Catedral</p></div></footer>
 <div class="site-credit">Made by <a href="https://www.linkedin.com/in/juanmanueldiazarbues" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn de Juan Manuel Díaz Arbues"><svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M20.45 20.45h-3.56v-5.57c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.34V8.98h3.42v1.57h.05c.47-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.46v6.29ZM5.32 7.41a2.07 2.07 0 1 1 0-4.13 2.07 2.07 0 0 1 0 4.13Zm1.78 13.04H3.54V8.98H7.1v11.47ZM22.23 0H1.77C.79 0 0 .77 0 1.73v20.54C0 23.23.79 24 1.77 24h20.46c.98 0 1.77-.77 1.77-1.73V1.73C24 .77 23.21 0 22.23 0Z"/></svg></a></div>
 <x-whatsapp-link class="whatsapp-float" aria-label="Consultar disponibilidad por WhatsApp"><span class="sr-only">WhatsApp</span></x-whatsapp-link>
 <div class="lightbox" data-lightbox hidden aria-hidden="true"><div class="lightbox-backdrop" data-close></div><div class="lightbox-dialog" role="dialog" aria-modal="true" aria-label="{{ __('site.gallery.viewer') }}"><button class="lightbox-close" type="button" data-close aria-label="{{ __('site.gallery.close') }}">×</button><button class="lightbox-arrow prev" type="button" data-prev aria-label="{{ __('site.gallery.previous') }}">‹</button><div data-lightbox-image></div><button class="lightbox-arrow next" type="button" data-next aria-label="{{ __('site.gallery.next') }}">›</button></div></div>
 <script type="application/json" id="gallery-data">{!! json_encode($images, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
</x-layouts.app>
