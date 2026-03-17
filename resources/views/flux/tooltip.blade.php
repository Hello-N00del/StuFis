@props(['toggleable' => false])
<span
    x-data="{ show: false }"
    class="relative inline-flex items-center"
    @if(!$toggleable)
        @mouseenter="show = true"
        @mouseleave="show = false"
    @else
        @click="show = !show"
        @click.outside="show = false"
    @endif
    {{ $attributes }}
>
    {{ $slot }}
</span>
