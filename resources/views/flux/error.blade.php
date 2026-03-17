@props(['name'])
@error($name)
    <p {{ $attributes->class('mt-1 text-xs text-red-600') }}>{{ $message }}</p>
@enderror
