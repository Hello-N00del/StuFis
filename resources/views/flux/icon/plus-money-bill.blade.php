@props(['variant' => 'outline'])
@php
$sizeClass = match($variant) {
    'mini'  => 'size-5',
    'micro' => 'size-4',
    default => 'size-6',
};
@endphp
<div {{ $attributes->class("relative inline-flex shrink-0 $sizeClass") }}>
    <x-fas-money-bill class="w-full h-full" />
    <span class="absolute bottom-0.5 left-0.5 flex items-center justify-center rounded-full bg-white p-0.5">
        <x-fas-plus class="w-3 h-3" />
    </span>
</div>
