@props([
    'variant' => 'primary',
    'size' => 'md',
    'type' => 'button',
])

@php
    $variants = [
        'primary' => 'bg-gsm-primary text-white hover:bg-gsm-primary/90 shadow-sm',
        'secondary' => 'bg-gsm-secondary text-gsm-secondary-foreground hover:bg-gsm-secondary/80 border border-gsm-200',
        'outline' => 'bg-transparent border border-gsm-300 text-gsm-700 hover:bg-gsm-100',
        'ghost' => 'bg-transparent text-gsm-700 hover:bg-gsm-100',
        'danger' => 'bg-gsm-danger text-white hover:bg-gsm-danger/90',
        'success' => 'bg-gsm-success text-white hover:bg-gsm-success/90',
    ];

    $sizes = [
        'sm' => 'px-3 py-1.5 text-xs',
        'md' => 'px-4 py-2 text-sm',
        'lg' => 'px-6 py-3 text-base',
    ];

    $classes = "gsm-btn " . ($variants[$variant] ?? $variants['primary']) . " " . ($sizes[$size] ?? $sizes['md']);
@endphp

<button {{ $attributes->merge(['type' => $type, 'class' => $classes]) }}>
    {{ $slot }}
</button>
