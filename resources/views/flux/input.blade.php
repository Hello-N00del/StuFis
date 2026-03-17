@props([
    'label'       => null,
    'description' => null,
    'badge'       => null,
    'type'        => 'text',
    'placeholder' => null,
])
@php
$inputClass = 'block w-full rounded-md border-0 py-1.5 px-3 text-slate-900 shadow-sm ring-1 ring-inset ring-slate-300 placeholder:text-slate-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-500';
@endphp

<div class="w-full">
    @if($label || $badge)
        <div class="flex items-center justify-between mb-1">
            @if($label)
                <label class="block text-sm font-medium text-slate-700">{{ $label }}</label>
            @endif
            @if($badge)
                <span class="text-xs text-slate-400">{{ $badge }}</span>
            @endif
        </div>
    @endif

    <input
        type="{{ $type }}"
        @if($placeholder) placeholder="{{ $placeholder }}" @endif
        {{ $attributes->class([$inputClass, 'class:input' => false])->except('class:input') }}
        data-flux-input
    />

    @if($description)
        <p class="mt-1 text-xs text-slate-500">{{ $description }}</p>
    @endif
</div>
