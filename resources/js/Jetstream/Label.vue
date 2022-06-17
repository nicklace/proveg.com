<script setup>
defineProps({
    value: String,
});
</script>

<template>
    <label class="form-label">
        {{ value }}<span>*</span>
    </label>
</template>
