@props(['class' => 'button'])
<a href="{{ config('chateau.whatsapp') }}" target="_blank" rel="noopener noreferrer" {{ $attributes->class([$class]) }}>{{ $slot }}</a>
