<template>
    <div class="container py-5">
        <div
            class="drop-area text-center p-5 border border-2"
            :class="{ 'border-dashed': isDragOver }"
            @dragover.prevent="handleDragOver"
            @dragleave.prevent="handleDragLeave"
            @drop.prevent="handleDrop"
        >
            <p class="mb-0">Drag and drop images here</p>
        </div>
        <div class="image-preview mt-3">
            <div v-for="(image, index) in images" :key="index" class="mt-2">
                <img
                    :src="image"
                    class="img-fluid img-thumbnail"
                    alt="Uploaded Image"
                />
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            isDragOver: false,
            images: [],
        };
    },
    methods: {
        handleDragOver() {
            this.isDragOver = true;
        },
        handleDragLeave() {
            this.isDragOver = false;
        },
        handleDrop(e) {
            const files = Array.from(e.dataTransfer.files);
            files.forEach((file) => {
                if (file.type.startsWith("image/")) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        this.images.push(e.target.result);
                    };
                    reader.readAsDataURL(file);
                }
            });
            this.isDragOver = false;
        },
    },
};
</script>

<style scoped>
.drop-area {
    cursor: pointer;
}
.border-dashed {
    border-style: dashed !important;
}
</style>
