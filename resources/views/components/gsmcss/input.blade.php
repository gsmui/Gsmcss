@props(['disabled' => false, 'label' => null, 'error' => null])

<div>
    @if($label)
        <label class="g-mb-1 g-text-dark" style="display: block; font-size: 0.875rem; font-weight: 500;">
            {{ $label }}
        </label>
    @endif

    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'g-input']) !!}>

    @if($error)
        <p class="g-mt-1 g-text-danger" style="font-size: 0.75rem;">{{ $error }}</p>
    @endif
</div>
