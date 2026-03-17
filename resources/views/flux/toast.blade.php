@props(['position' => 'top right'])
@php
$posClass = match(true) {
    str_contains($position, 'top')    && str_contains($position, 'right')  => 'top-4 right-4',
    str_contains($position, 'top')    && str_contains($position, 'left')   => 'top-4 left-4',
    str_contains($position, 'bottom') && str_contains($position, 'right')  => 'bottom-4 right-4',
    str_contains($position, 'bottom') && str_contains($position, 'left')   => 'bottom-4 left-4',
    default                                                                  => 'top-4 right-4',
};
@endphp
<div
    x-data="{ toasts: [] }"
    @toast.window="
        const id = Date.now();
        toasts.push({ id, message: $event.detail.message, type: $event.detail.type ?? 'info' });
        setTimeout(() => toasts = toasts.filter(t => t.id !== id), 4000);
    "
    class="fixed {{ $posClass }} z-[9999] flex flex-col gap-2 pointer-events-none"
    {{ $attributes }}
>
    <template x-for="toast in toasts" :key="toast.id">
        <div
            x-transition:enter="transition ease-out duration-250"
            x-transition:enter-start="opacity-0 translate-x-8"
            x-transition:enter-end="opacity-100 translate-x-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="pointer-events-auto flex items-center gap-3 rounded-lg bg-white px-4 py-3 shadow-lg ring-1 ring-slate-200 min-w-64 max-w-sm"
        >
            <span
                :class="{
                    'text-indigo-500': toast.type === 'info',
                    'text-green-500':  toast.type === 'success',
                    'text-red-500':    toast.type === 'error',
                    'text-amber-500':  toast.type === 'warning',
                }"
            >
                <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        x-bind:d="toast.type === 'error'
                            ? 'M6 18L18 6M6 6l12 12'
                            : toast.type === 'success'
                            ? 'M5 13l4 4L19 7'
                            : 'M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'"/>
                </svg>
            </span>
            <p class="text-sm text-slate-700" x-text="toast.message"></p>
        </div>
    </template>
</div>
