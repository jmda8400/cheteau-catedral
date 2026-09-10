@php($logo = public_path('assets/images/logo-chateau-catedral.png'))
@if(file_exists($logo))
    <img src="{{ asset('assets/images/logo-chateau-catedral.png') }}" alt="Chateau Catedral" width="230" height="54" {{ $attributes }}>
@else
    <span {{ $attributes->class(['wordmark']) }}>Chateau <em>Catedral</em></span>
@endif
