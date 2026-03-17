@props([
    'label'       => null,
    'description' => null,
    'align'       => 'right',
])
<div {{ $attributes->class(['flex items-start gap-3', 'flex-row-reverse justify-end' => $align === 'left']) }}>
    {{-- Toggle button --}}
    <button
        type="button"
        role="switch"
        x-data
        x-bind:aria-checked="$el.previousElementSibling?.checked ?? false"
        @click="$el.previousElementSibling && ($el.previousElementSibling.checked = !$el.previousElementSibling.checked)"
        class="relative mt-0.5 inline-flex h-5 w-9 shrink-0 cursor-pointer rounded-full border-2 border-transparent ring-1 ring-slate-300 transition-colors duration-200 ease-in-out focus:outline-none focus-visible:ring-2 focus-visible:ring-indigo-500 bg-slate-200 data-[checked]:bg-indigo-600"
    >
        <span class="pointer-events-none inline-block size-4 translate-x-0 rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out data-[checked]:translate-x-4"></span>
    </button>

    {{-- Hidden checkbox for wire:model --}}
    <input type="checkbox" class="sr-only" {{ $attributes->except(['label','description','align']) }} />

    @if($label || $description)
        <div class="flex flex-col">
            @if($label)
                <span class="text-sm font-medium text-slate-700">{{ $label }}</span>
            @endif
            @if($description)
                <span class="text-xs text-slate-500">{{ $description }}</span>
            @endif
        </div>
    @endif
</div>
