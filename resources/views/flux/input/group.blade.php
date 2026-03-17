@props([])
<div {{ $attributes->class('flex rounded-md shadow-sm ring-1 ring-inset ring-slate-300 focus-within:ring-2 focus-within:ring-indigo-600') }}>
    {{ $slot }}
</div>
