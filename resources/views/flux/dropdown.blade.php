@props([])
<div
    x-data="{ open: false }"
    @click.outside="open = false"
    x-init="
        const children = Array.from($el.children);
        const trigger = children.find(c => !c.hasAttribute('x-show'));
        if (trigger) trigger.addEventListener('click', () => { $data.open = !$data.open });
    "
    {{ $attributes->class('relative inline-block') }}
>
    {{ $slot }}
</div>
