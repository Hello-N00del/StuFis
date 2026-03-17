@props([
    'variant'      => 'primary',
    'size'         => 'md',
    'icon'         => null,
    'icon:trailing' => null,
    'href'         => null,
    'type'         => 'button',
    'disabled'     => false,
])
@php
$base = 'inline-flex items-center justify-center gap-1.5 font-medium rounded-md transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-indigo-500 disabled:opacity-50 disabled:cursor-not-allowed';

$variantClass = match($variant) {
    'primary' => 'bg-indigo-600 text-white hover:bg-indigo-700 shadow-sm',
    'subtle'  => 'bg-slate-100 text-slate-700 hover:bg-slate-200',
    'ghost'   => 'bg-transparent text-slate-600 hover:bg-slate-100',
    'danger'  => 'bg-red-600 text-white hover:bg-red-700 shadow-sm',
    default   => 'bg-indigo-600 text-white hover:bg-indigo-700 shadow-sm',
};

$sizeClass = match($size) {
    'sm'  => 'px-2 py-1 text-xs',
    'lg'  => 'px-5 py-2.5 text-base',
    default => 'px-3 py-1.5 text-sm',
};

$iconSize = match($size) {
    'sm'  => 'size-3.5',
    'lg'  => 'size-5',
    default => 'size-4',
};

$customIcons = ['plus-wallet', 'plus-money-bill'];
$tag = $href ? 'a' : 'button';
@endphp

<{{ $tag }}
    @if($href) href="{{ $href }}" @endif
    @if(!$href) type="{{ $type }}" @endif
    @if($disabled) disabled @endif
    {{ $attributes->class([$base, $variantClass, $sizeClass]) }}
    data-flux-button
>
    @if($icon)
        @if(in_array($icon, $customIcons))
            <x-dynamic-component :component="'flux.icon.' . $icon" class="{{ $iconSize }}" />
        @else
            <x-dynamic-component :component="'heroicon-o-' . $icon" class="{{ $iconSize }}" />
        @endif
    @endif

    {{ $slot }}

    @if(${'icon:trailing'} ?? null)
        @if(in_array(${'icon:trailing'}, $customIcons))
            <x-dynamic-component :component="'flux.icon.' . ${'icon:trailing'}" class="{{ $iconSize }}" />
        @else
            <x-dynamic-component :component="'heroicon-o-' . ${'icon:trailing'}" class="{{ $iconSize }}" />
        @endif
    @endif
</{{ $tag }}>
