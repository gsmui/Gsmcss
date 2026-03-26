@props([
    'variant' => 'primary',
    'size' => 'md',
    'type' => 'button',
    'glass' => false,
])

@php
    $classes = "g-btn g-btn-{$variant} g-btn-{$size}";
    if ($glass) {
        $classes .= " g-btn-glass";
    }
@endphp

<button {{ $attributes->merge(['type' => $type, 'class' => $classes]) }}>
    {{ $slot }}
</button>
