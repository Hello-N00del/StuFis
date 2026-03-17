@props(['level' => 2, 'size' => null])
@php
$tag = 'h' . $level;
$sizeClass = match($size) {
    'xl'    => 'text-2xl font-bold text-slate-900',
    'lg'    => 'text-xl font-semibold text-slate-900',
    'md'    => 'text-lg font-semibold text-slate-800',
    'sm'    => 'text-base font-semibold text-slate-800',
    'xs'    => 'text-sm font-semibold text-slate-700',
    default => 'text-xl font-semibold text-slate-900',
};
@endphp
<{{ $tag }} {{ $attributes->class($sizeClass) }}>{{ $slot }}</{{ $tag }}>
