@props(['name'])
@php
$paths = [
 'people' => '<path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm13 10v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>',
 'home' => '<path d="m3 11 9-8 9 8v10h-6v-7H9v7H3V11Z"/>',
 'bed' => '<path d="M3 5v14m0-5h18v5m-18-8h18v3H3m3-3V7h5v4"/>',
 'mountain' => '<path d="m2 20 7-12 4 6 2-3 7 9H2Z"/>',
 'flame' => '<path d="M12 22c4 0 7-3 7-7 0-3-2-6-5-9 0 3-2 4-3 5 0-4-2-7-2-9-3 3-5 8-4 13 0 4 3 7 7 7Z"/>',
 'wifi' => '<path d="M5 12.55a11 11 0 0 1 14 0M1.5 9a16 16 0 0 1 21 0M8.5 16a6 6 0 0 1 7 0M12 20h.01"/>',
 'shield' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/>',
 'utensils' => '<path d="M3 2v7a3 3 0 0 0 6 0V2M6 2v20m10-20v20m0-20c4 2 5 8 0 11"/>',
];
@endphp
<svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" {{ $attributes }}>{!! $paths[$name] ?? $paths['home'] !!}</svg>
