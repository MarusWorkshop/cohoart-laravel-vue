<script setup>
import { Link } from '@inertiajs/inertia-vue3'

defineProps({
    currentPage: String,
})
</script>

<template>
    <main>
        <header>
            <Link href="/" class="px-3 py-2 bg-gray-300 rounded mr-2">Home</Link>
            <Link href="/profile" class="px-3 py-2 bg-gray-300 rounded mx-2">Profile</Link>
        </header>
        <article class="mt-10">
            <div class="mb-5">Current Page: {{ currentPage }}</div>
        </article>
        <slot /> <!-- slot outlet -->
    </main>
</template>
