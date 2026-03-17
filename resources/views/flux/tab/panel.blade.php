@props(['name'])
<div
    x-show="tab === '{{ $name }}'"
    x-cloak
    role="tabpanel"
    {{ $attributes->class('pt-4') }}
>
    {{ $slot }}
</div>
