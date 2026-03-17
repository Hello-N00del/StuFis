@props([
    'label'       => null,
    'description' => null,
    'placeholder' => null,
])
@php
$selectClass = 'block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-slate-900 ring-1 ring-inset ring-slate-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 disabled:cursor-not-allowed disabled:bg-slate-50';
@endphp

<div class="w-full">
    @if($label)
        <label class="block text-sm font-medium text-slate-700 mb-1">{{ $label }}</label>
    @endif

    <select {{ $attributes->class($selectClass) }} data-flux-input>
        @if($placeholder)
            <option value="" disabled selected>{{ $placeholder }}</option>
        @endif
        {{ $slot }}
    </select>

    @if($description)
        <p class="mt-1 text-xs text-slate-500">{{ $description }}</p>
    @endif
</div>
