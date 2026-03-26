@props(['disabled' => false, 'label' => null, 'error' => null])

<div>
    @if($label)
        <label class="block text-sm font-medium text-gsm-700 dark:text-gsm-300 mb-1">
            {{ $label }}
        </label>
    @endif

    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'flex h-10 w-full rounded-gsm-md border border-gsm-300 bg-white px-3 py-2 text-sm ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-gsm-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-gsm-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 dark:border-gsm-800 dark:bg-gsm-950 dark:ring-offset-gsm-950 dark:placeholder:text-gsm-400']) !!}>

    @if($error)
        <p class="mt-1 text-xs text-gsm-danger">{{ $error }}</p>
    @endif
</div>
