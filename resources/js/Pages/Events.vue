<template>
    <Layout>
        <div class="mb-6 flex flex-col p-4 space-y-2 bg-[#FFFFFF]">
            <div class="flex items-center justify-between">
                <h1 class="text-xl font-bold text-gray-700">Posts</h1>
                <div class="flex items-center space-x-2 md:hidden" @click="changePostStructure">
                    <div class="h-4 w-8 rounded-xl border-4 border-gray-400" :class="{ 'bg-gray-400' : postFlowSingle }"></div>
                </div>
            </div>
            <div class="grow columns-2 overflow-y-scroll pb-24 md:columns-3xs" :class="{ 'columns-1' : postFlowSingle, 'columns-2' : !postFlowSingle }">
                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/1"/>
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/2" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/3" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/4" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/5" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/6" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/7" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/8" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/9" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/10" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/11" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/12" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/13" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/14" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/15" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/16" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/17" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/18" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/19" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/20" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/2" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
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
    name: 'Events',
    data() {
        return {
            postFlowSingle: true,
            menuState:false,
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
        hubToExplore() {
            this.$inertia.get('/explore')
        },
        changePostStructure() {
            this.postFlowSingle = !this.postFlowSingle;
        },
        toggleMenu() {
            this.menuState = !this.menuState;
        },
    },
};
</script>
