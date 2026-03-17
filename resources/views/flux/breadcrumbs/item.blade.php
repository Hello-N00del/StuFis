@props(['href' => null, 'icon' => null, 'icon:variant' => 'outline'])
<li class="flex items-center gap-1">
    @unless($loop->first ?? false)
        <svg class="size-3.5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
    @endunless
    @if($href)
        <a href="{{ $href }}" class="flex items-center gap-1 hover:text-slate-700 transition-colors">
            @if($icon)
                <x-dynamic-component :component="'heroicon-o-' . $icon" class="size-3.5" />
            @endif
            {{ $slot }}
        </a>
    @else
        <span class="flex items-center gap-1 text-slate-700 font-medium">
            @if($icon)
                <x-dynamic-component :component="'heroicon-o-' . $icon" class="size-3.5" />
            @endif
            {{ $slot }}
        </span>
    @endif
</li>
