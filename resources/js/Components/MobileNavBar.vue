<script>
import { Link } from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'

export default {
    name: 'MobileNavBar',
    data() {
        return {
        };
    },
    components: {
        Link,

    },
    props:    {
    },
    computed: {
    },
    watch:    {
    },
    methods:  {
    },
};
</script>

<template>
    <div class="fixed bottom-0 left-0 right-0 z-10 grid grid-cols-4 bg-[#4F5055]">
        <div class="p-4 flex justify-center items-center">
            <Link href="/" class="rounded-full h-10 w-10" :class="{ 'bg-[#98999D]' : $page.component === 'Hub', 'bg-[#EAEBEC]' : $page.component !== 'Hub'}"></link>
        </div>
        <div class="p-4 flex justify-center items-center">
            <Link href="/explore" class="rounded-full h-10 w-10" :class="{ 'bg-[#98999D]' : $page.component === 'Explore', 'bg-[#EAEBEC]' : $page.component !== 'Explore'}"></Link>
        </div>
        <div class="p-4 flex justify-center items-center">
            <Link href="/jobs" class="rounded-full h-10 w-10" :class="{ 'bg-[#98999D]' : $page.component === 'Jobs', 'bg-[#EAEBEC]' : $page.component !== 'Jobs'}"></Link>
        </div>
        <div class="p-4 flex justify-center items-center">
            <Link href="/profile" class="rounded-full h-10 w-10" :class="{ 'bg-[#98999D]' : $page.component === 'Profile', 'bg-[#EAEBEC]' : $page.component !== 'Profile'}"></Link>
        </div>
    </div>
</template>
