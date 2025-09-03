@props(['type',])

<button type="{{ $type }}" {{ $attributes->class("$type-btn") }}>
    {{ $slot }}
</button>