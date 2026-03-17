@props(['color' => 'slate', 'size' => 'md'])
@php
$colorClass = match($color) {
    'indigo'  => 'bg-indigo-100 text-indigo-700 ring-indigo-200',
    'green'   => 'bg-green-100 text-green-700 ring-green-200',
    'red'     => 'bg-red-100 text-red-700 ring-red-200',
    'yellow'  => 'bg-yellow-100 text-yellow-700 ring-yellow-200',
    'blue'    => 'bg-blue-100 text-blue-700 ring-blue-200',
    default   => 'bg-slate-100 text-slate-700 ring-slate-200',
};
$sizeClass = match($size) {
    'sm' => 'px-1.5 py-0.5 text-xs',
    'lg' => 'px-3 py-1 text-sm',
    default => 'px-2 py-0.5 text-xs',
};
@endphp
<span {{ $attributes->class("inline-flex items-center font-medium rounded-full ring-1 $colorClass $sizeClass") }}>
    {{ $slot }}
</span>
