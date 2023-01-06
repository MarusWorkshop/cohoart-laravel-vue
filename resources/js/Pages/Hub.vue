<template>
    <Layout v-slot="{filterDrawerState}">
        <div class="pb-24">
            <div class="px-4 flex flex-col space-y-2">
                <div class="md:columns-3xs grow overflow-y-scroll" :class="{ 'columns-1' : filterDrawerState, 'columns-2' : !filterDrawerState }">
                    <div class="relative mb-6 rounded-xl space-y-4">
                        <img class="rounded-xl" src="https://source.unsplash.com/random/55"/>
                        <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                            <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                                <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/12" />
                            </div>
                            <div class="text-gray-500">
                                <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                                <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                            </div>
                        </div>
                    </div>

                    <div class="relative mb-6 rounded-xl space-y-4">
                        <img class="rounded-xl" src="https://source.unsplash.com/random/65" />
                        <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                            <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                                <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/72" />
                            </div>
                            <div class="text-gray-500">
                                <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                                <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                            </div>
                        </div>
                    </div>

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
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from "../Layouts/Layout.vue";

export default {
    name: 'Hub',
    data() {
        return {
        };
    },
    components: {
        Layout,
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
