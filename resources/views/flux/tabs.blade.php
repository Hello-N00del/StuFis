@props([])
<div
    role="tablist"
    {{ $attributes->class('flex border-b border-slate-200 gap-1') }}
>
    {{ $slot }}
</div>
