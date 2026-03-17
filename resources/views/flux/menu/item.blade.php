@props([
    'icon'     => null,
    'variant'  => 'default',
    'disabled' => false,
])
@php
$class = match($variant) {
    'danger' => 'text-red-600 hover:bg-red-50',
    default  => 'text-slate-700 hover:bg-slate-50',
};
$disabledClass = $disabled ? 'opacity-40 pointer-events-none cursor-not-allowed' : 'cursor-pointer';
@endphp
<button
    type="button"
    @if($disabled) disabled @endif
    {{ $attributes->class(["flex w-full items-center gap-2 px-3 py-1.5 text-sm transition-colors $class $disabledClass"]) }}
    @click="open = false"
>
    @if($icon)
        <x-dynamic-component :component="'heroicon-o-' . $icon" class="size-4 shrink-0" />
    @endif
    {{ $slot }}
</button>
