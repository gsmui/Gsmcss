<!-- gsmcss Vue Component Template -->
<template>
  <button :class="['g-btn', `g-btn-${variant}`, `g-btn-${size}`]" v-bind="$attrs">
    <slot></slot>
  </button>
</template>

<script setup>
defineProps({
  variant: { type: String, default: 'primary' },
  size: { type: String, default: 'md' }
})
</script>

<style>
@import 'gsmcss/dist/gsmcss.bundle.css';
</style>
