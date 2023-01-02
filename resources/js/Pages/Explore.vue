<script>
import MobileNavBar from '../Components/MobileNavBar.vue'
import SearchBar from "../Components/SearchBar.vue";

export default {
    name: 'Explore',
    data() {
        return {
        };
    },
    components: {
        MobileNavBar,SearchBar,
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
    <MobileNavBar/>
    <SearchBar/>

    <div class="overflow-x-scroll px-4 flex justify-between items-center">
        <h1 class="bg-[#D9D9D9] px-6 py-3 rounded-xl font-bold text-white text-lg">All</h1>
        <h1 class="hover:bg-[#D9D9D9] hover:text-white text-sm hover:text-lg px-6 py-3 rounded-xl font-bold text-gray-400">Events</h1>
        <h1 class="hover:bg-[#D9D9D9] hover:text-white text-sm hover:text-lg px-6 py-3 rounded-xl font-bold text-gray-400">Creators</h1>
        <h1 class="hover:bg-[#D9D9D9] hover:text-white text-sm hover:text-lg px-6 py-3 rounded-xl font-bold text-gray-400">Posts</h1>
    </div>

    <div class="columns-2 p-4 md:columns-3xs grow overflow-y-scroll pb-24">
        <div class="relative mb-6 space-y-4 rounded-xl">
            <img class="rounded-xl" src="https://source.unsplash.com/random/1" />
            <div class="flex h-6 md:h-10 items-center justify-start space-x-2">
                <div class="flex h-full w-6 md:w-10 shrink-0 shrink-0 items-center justify-center overflow-hidden rounded-full">
                    <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                </div>
                <div class="text-gray-500">
                    <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                    <h2 class="text-sm hidden md:block">Full-Stack developer</h2>
                </div>
            </div>
        </div>

        <div class="relative mb-6 space-y-4 rounded-xl">
            <img class="rounded-xl" src="https://source.unsplash.com/random/2" />
            <div class="flex h-6 md:h-10 items-center justify-start space-x-2">
                <div class="flex h-full w-6 md:w-10 shrink-0 items-center justify-center overflow-hidden rounded-full">
                    <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                </div>
                <div class="text-gray-500">
                    <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                    <h2 class="text-sm hidden md:block">Full-Stack developer</h2>
                </div>
            </div>
        </div>

        <div class="relative mb-6 space-y-4 rounded-xl">
            <img class="rounded-xl" src="https://source.unsplash.com/random/3" />
            <div class="flex h-6 md:h-10 items-center justify-start space-x-2">
                <div class="flex h-full w-6 md:w-10 shrink-0 items-center justify-center overflow-hidden rounded-full">
                    <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                </div>
                <div class="text-gray-500">
                    <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                    <h2 class="text-sm hidden md:block">Full-Stack developer</h2>
                </div>
            </div>
        </div>

        <div class="relative mb-6 space-y-4 rounded-xl">
            <img class="rounded-xl" src="https://source.unsplash.com/random/4" />
            <div class="flex h-6 md:h-10 items-center justify-start space-x-2">
                <div class="flex h-full w-6 md:w-10 shrink-0 items-center justify-center overflow-hidden rounded-full">
                    <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                </div>
                <div class="text-gray-500">
                    <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                    <h2 class="text-sm hidden md:block">Full-Stack developer</h2>
                </div>
            </div>
        </div>

        <div class="relative mb-6 space-y-4 rounded-xl">
            <img class="rounded-xl" src="https://source.unsplash.com/random/5" />
            <div class="flex h-6 md:h-10 items-center justify-start space-x-2">
                <div class="flex h-full w-6 md:w-10 shrink-0 items-center justify-center overflow-hidden rounded-full">
                    <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                </div>
                <div class="text-gray-500">
                    <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                    <h2 class="text-sm hidden md:block">Full-Stack developer</h2>
                </div>
            </div>
        </div>

        <div class="relative mb-6 space-y-4 rounded-xl">
            <img class="rounded-xl" src="https://source.unsplash.com/random/6" />
            <div class="flex h-6 md:h-10 items-center justify-start space-x-2">
                <div class="flex h-full w-6 md:w-10 shrink-0 items-center justify-center overflow-hidden rounded-full">
                    <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                </div>
                <div class="text-gray-500">
                    <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                    <h2 class="text-sm hidden md:block">Full-Stack developer</h2>
                </div>
            </div>
        </div>

        <div class="relative mb-6 space-y-4 rounded-xl">
            <img class="rounded-xl" src="https://source.unsplash.com/random/7" />
            <div class="flex h-6 md:h-10 items-center justify-start space-x-2">
                <div class="flex h-full w-6 md:w-10 shrink-0 items-center justify-center overflow-hidden rounded-full">
                    <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                </div>
                <div class="text-gray-500">
                    <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                    <h2 class="text-sm hidden md:block">Full-Stack developer</h2>
                </div>
            </div>
        </div>

        <div class="relative mb-6 space-y-4 rounded-xl">
            <img class="rounded-xl" src="https://source.unsplash.com/random/8" />
            <div class="flex h-6 md:h-10 items-center justify-start space-x-2">
                <div class="flex h-full w-6 md:w-10 shrink-0 items-center justify-center overflow-hidden rounded-full">
                    <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                </div>
                <div class="text-gray-500">
                    <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                    <h2 class="text-sm hidden md:block">Full-Stack developer</h2>
                </div>
            </div>
        </div>

        <div class="relative mb-6 space-y-4 rounded-xl">
            <img class="rounded-xl" src="https://source.unsplash.com/random/9" />
            <div class="flex h-6 md:h-10 items-center justify-start space-x-2">
                <div class="flex h-full w-6 md:w-10 shrink-0 items-center justify-center overflow-hidden rounded-full">
                    <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                </div>
                <div class="text-gray-500">
                    <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                    <h2 class="text-sm hidden md:block">Full-Stack developer</h2>
                </div>
            </div>
        </div>

        <div class="relative mb-6 space-y-4 rounded-xl">
            <img class="rounded-xl" src="https://source.unsplash.com/random/10" />
            <div class="flex h-6 md:h-10 items-center justify-start space-x-2">
                <div class="flex h-full w-6 md:w-10 shrink-0 items-center justify-center overflow-hidden rounded-full">
                    <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                </div>
                <div class="text-gray-500">
                    <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                    <h2 class="text-sm hidden md:block">Full-Stack developer</h2>
                </div>
            </div>
        </div>
    </div>
</template>
