@props([
    'variant' => 'primary',
    'rounded' => 'full',
])

@php
    $variants = [
        'primary' => 'bg-gsm-primary/10 text-gsm-primary border-gsm-primary/20',
        'secondary' => 'bg-gsm-secondary/10 text-gsm-secondary border-gsm-secondary/20',
        'outline' => 'bg-transparent border border-gsm-300 text-gsm-700',
        'danger' => 'bg-gsm-danger/10 text-gsm-danger border-gsm-danger/20',
        'success' => 'bg-gsm-success/10 text-gsm-success border-gsm-success/20',
        'warning' => 'bg-gsm-warning/10 text-gsm-warning border-gsm-warning/20',
        'info' => 'bg-gsm-info/10 text-gsm-info border-gsm-info/20',
    ];

    $roundedClasses = [
        'full' => 'rounded-full',
        'sm' => 'rounded-gsm-sm',
        'md' => 'rounded-gsm-md',
        'lg' => 'rounded-gsm-lg',
    ];

    $classes = "inline-flex items-center border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-gsm-ring " . ($variants[$variant] ?? $variants['primary']) . " " . ($roundedClasses[$rounded] ?? $roundedClasses['full']);
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
