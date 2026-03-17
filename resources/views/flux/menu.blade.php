@props([])
<div
    x-show="open"
    x-cloak
    x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-75"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"
    {{ $attributes->class('absolute right-0 z-50 mt-1 min-w-40 origin-top-right rounded-lg bg-white py-1 shadow-lg ring-1 ring-slate-200 focus:outline-none') }}
>
    {{ $slot }}
</div>
