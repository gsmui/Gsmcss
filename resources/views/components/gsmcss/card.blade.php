@props([
    'title' => null,
    'subtitle' => null,
    'footer' => null,
    'glass' => false,
    'hover' => true,
])

@php
    $classes = "g-card";
    if ($glass) $classes .= " g-card-glass";
    if ($hover) $classes .= " g-card-hover";
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    @if($title || $subtitle)
        <div class="g-mb-4">
            @if($title)
                <h3 class="g-card-title">{{ $title }}</h3>
            @endif
            @if($subtitle)
                <p class="g-card-subtitle">{{ $subtitle }}</p>
            @endif
        </div>
    @endif

    <div class="g-card-content">
        {{ $slot }}
    </div>

    @if($footer)
        <div class="g-mt-6 g-pt-4 g-border-light" style="border-top: 1px solid rgba(0,0,0,0.05)">
            {{ $footer }}
        </div>
    @endif
</div>
