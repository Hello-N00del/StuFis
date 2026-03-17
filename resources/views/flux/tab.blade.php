@props(['name'])
<button
    type="button"
    role="tab"
    x-init="if (tab === null) tab = '{{ $name }}'"
    @click="tab = '{{ $name }}'"
    :class="tab === '{{ $name }}'
        ? 'border-b-2 border-indigo-600 text-indigo-600 font-semibold -mb-px'
        : 'border-b-2 border-transparent text-slate-500 hover:text-slate-700 -mb-px'"
    {{ $attributes->class('px-3 py-2 text-sm transition-colors focus:outline-none') }}
>
    {{ $slot }}
</button>
