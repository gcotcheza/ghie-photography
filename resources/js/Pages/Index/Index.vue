<template>
    <div class="text-white">{{ message }}</div>
</template>

<script setup>
defineProps({
    message: String,
});
</script>
