@props([
    'title' => null,
    'subtitle' => null,
    'footer' => null,
])

<div {{ $attributes->merge(['class' => 'gsm-card']) }}>
    @if($title || $subtitle)
        <div class="mb-4">
            @if($title)
                <h3 class="text-lg font-semibold text-gsm-900 dark:text-white">{{ $title }}</h3>
            @endif
            @if($subtitle)
                <p class="text-sm text-gsm-500 dark:text-gsm-400">{{ $subtitle }}</p>
            @endif
        </div>
    @endif

    <div class="text-gsm-700 dark:text-gsm-300">
        {{ $slot }}
    </div>

    @if($footer)
        <div class="mt-6 border-t border-gsm-100 pt-4 dark:border-gsm-800">
            {{ $footer }}
        </div>
    @endif
</div>
