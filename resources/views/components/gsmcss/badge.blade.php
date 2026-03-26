@props([
    'variant' => 'primary',
])

<span {{ $attributes->merge(['class' => "g-badge g-badge-{$variant}"]) }}>
    {{ $slot }}
</span>
