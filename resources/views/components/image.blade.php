@props(['file', 'alt', 'loading' => 'lazy', 'class' => '', 'width' => '1600', 'height' => '1067'])
@php($exists = file_exists(public_path('assets/images/'.$file)))
@if($exists)
    <img src="{{ asset('assets/images/'.$file) }}" alt="{{ $alt }}" width="{{ $width }}" height="{{ $height }}" loading="{{ $loading }}" decoding="async" {{ $attributes->class([$class]) }}>
@else
    <div role="img" aria-label="{{ $alt }}" {{ $attributes->class(['image-placeholder', $class]) }}><span>Chateau Catedral</span><small>Fotografía próximamente</small></div>
@endif
