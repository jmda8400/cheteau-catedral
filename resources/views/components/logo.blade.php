@php($logo = public_path('assets/images/ee7d3680-b6a2-4cad-b2a2-88f6d3e60f4f.png'))
@if(file_exists($logo))
    <img src="{{ asset('assets/images/ee7d3680-b6a2-4cad-b2a2-88f6d3e60f4f.png') }}" alt="Chateau Catedral" width="1775" height="887" {{ $attributes }}>
@else
    <span {{ $attributes->class(['wordmark']) }}>Chateau <em>Catedral</em></span>
@endif
