@props(['value' => null, 'disabled' => false])
<option
    @if($value !== null) value="{{ $value }}" @endif
    @if($disabled) disabled @endif
    {{ $attributes }}
>{{ $slot }}</option>
