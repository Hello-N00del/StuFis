@props(['variant' => 'default'])
@php
$class = match($variant) {
    'subtle' => 'text-sm text-slate-500',
    default  => 'text-sm text-slate-700',
};
@endphp
<p {{ $attributes->class($class) }}>{{ $slot }}</p>
