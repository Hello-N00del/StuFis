@props([])
<div
    x-show="show"
    x-cloak
    x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-75"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"
    {{ $attributes->class('absolute bottom-full left-1/2 z-50 mb-2 -translate-x-1/2 rounded-lg bg-slate-800 px-3 py-2 text-sm text-white shadow-lg') }}
>
    {{ $slot }}
    <div class="absolute top-full left-1/2 -translate-x-1/2 border-4 border-transparent border-t-slate-800"></div>
</div>
