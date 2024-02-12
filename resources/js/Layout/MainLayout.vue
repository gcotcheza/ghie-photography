<template>
    <Navigation />
    <Timer />

    <slot>Default</slot>
</template>

<script setup>
import Navigation from "./Navigation.vue";
import Timer from "./Timer.vue";
</script>
