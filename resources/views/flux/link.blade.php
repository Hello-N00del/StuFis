@props(['href' => '#', 'variant' => 'default'])
@php
$class = match($variant) {
    'subtle' => 'text-sm text-slate-500 hover:text-slate-700 underline-offset-2 hover:underline transition-colors',
    default  => 'text-sm text-indigo-600 hover:text-indigo-800 underline-offset-2 hover:underline transition-colors',
};
@endphp
<a href="{{ $href }}" {{ $attributes->class($class) }}>{{ $slot }}</a>
