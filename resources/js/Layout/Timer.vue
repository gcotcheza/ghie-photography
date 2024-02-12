<template>
    <div class="text-white">Timer: {{ timer }}</div>
</template>

<script setup>
import { ref } from "vue";

const timer = ref(0);
setInterval(() => timer.value++, 1000);
</script>
