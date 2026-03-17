@props([
    'name'   => null,
    'src'    => null,
    'color'  => 'auto',
    'circle' => false,
])
@php
$initials = collect(explode(' ', (string) $name))
    ->map(fn($w) => strtoupper(substr($w, 0, 1)))
    ->take(2)
    ->implode('');

// Deterministic color from name
$colors = [
    'bg-indigo-500', 'bg-violet-500', 'bg-sky-500',
    'bg-emerald-500', 'bg-amber-500', 'bg-rose-500',
    'bg-teal-500', 'bg-pink-500',
];
$colorClass = $color === 'auto' && $name
    ? $colors[abs(crc32($name)) % count($colors)]
    : 'bg-slate-400';

$shapeClass = $circle ? 'rounded-full' : 'rounded-md';
@endphp
<span {{ $attributes->class(["inline-flex size-8 shrink-0 items-center justify-center overflow-hidden $shapeClass"]) }}>
    @if($src)
        <img src="{{ $src }}" alt="{{ $name }}" class="size-full object-cover">
    @else
        <span class="{{ $colorClass }} {{ $shapeClass }} size-full flex items-center justify-center text-xs font-semibold text-white">
            {{ $initials ?: '?' }}
        </span>
    @endif
</span>
