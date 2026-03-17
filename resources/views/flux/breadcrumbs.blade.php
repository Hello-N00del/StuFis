@props([])
<nav {{ $attributes->class('flex items-center gap-1 text-sm text-slate-500') }} aria-label="Breadcrumb">
    <ol class="flex items-center gap-1">
        {{ $slot }}
    </ol>
</nav>
