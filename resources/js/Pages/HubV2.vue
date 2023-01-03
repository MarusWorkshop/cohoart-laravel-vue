<template>
    <div class="group relative">
        <div class="absolute h-screen w-screen bg-[#4F5055]" @click="toggleMenu">
            <div class="fixed right-0 h-full w-2/3 md:w-1/4 py-[5vh] px-4">
                <h1 class="mb-4 text-4xl font-bold text-white">COHOART</h1>
                <ul class="flex flex-col space-y-3">
                    <li class="pl-4 text-2xl font-semibold text-gray-400 hover:border-l-4 hover:border-white hover:text-white">Hub</li>
                    <li class="pl-4 text-2xl font-semibold text-gray-400 hover:border-l-4 hover:border-white hover:text-white">Explore</li>
                    <li class="pl-4 text-2xl font-semibold text-gray-400 hover:border-l-4 hover:border-white hover:text-white">Jobs</li>
                    <li class="pl-4 text-2xl font-semibold text-gray-400 hover:border-l-4 hover:border-white hover:text-white">Profile</li>
                </ul>
            </div>
        </div>
        <div class="absolute h-screen w-screen " :class="{'right-2/3 md:right-1/4 flex items-center justify-center':menuState}">
            <div class="h-screen w-screen overflow-y-scroll bg-[#E9E9E9]" :class="{ 'pointer-events-none h-[90vh] rounded-3xl shadow-xl blur-[2px] opacity-90':menuState }">
                <div class="mb-6 flex flex-col space-y-2 p-4 group-hover:rounded-xl">
                    <div class="flex items-center justify-between">
                        <h1 class="text-xl font-bold text-gray-700">Posts</h1>
                        <div class="flex items-center space-x-2 md:hidden" @click="changePostStructure">
                            <div class="h-4 w-8 rounded-xl border-4 border-gray-400" :class="{ 'bg-gray-400' : postFlowSingle }"></div>
                        </div>
                        <div class="flex items-center space-x-2 md:hidden" @click="toggleMenu">
                            <div class="h-4 w-8 rounded-xl border-4 border-gray-400" :class="{ 'bg-gray-400' : menuState }"></div>
                        </div>
                    </div>
                    <div class="grow overflow-y-scroll pb-24 md:columns-3xs" :class="{ 'columns-1' : postFlowSingle, 'columns-2' : !postFlowSingle }">
                        <div class="relative mb-6 space-y-4 rounded-xl">
                            <img class="rounded-xl" src="https://source.unsplash.com/random/1" />
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

                        <div class="relative mb-6 space-y-4 rounded-xl">
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

                        <div class="relative mb-6 space-y-4 rounded-xl">
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

                        <div class="relative mb-6 space-y-4 rounded-xl">
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

                        <div class="relative mb-6 space-y-4 rounded-xl">
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

                        <div class="relative mb-6 space-y-4 rounded-xl">
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

                        <div class="relative mb-6 space-y-4 rounded-xl">
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

                        <div class="relative mb-6 space-y-4 rounded-xl">
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

                        <div class="relative mb-6 space-y-4 rounded-xl">
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

                        <div class="relative mb-6 space-y-4 rounded-xl">
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
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
import MobileNavBar from '../Components/MobileNavBar.vue'
import SearchBar from "../Components/SearchBar.vue";

export default {
    name: 'HubV2',
    data() {
        return {
            postFlowSingle: true,
            menuState:false,
        };
    },
    components: {
        MobileNavBar,
        SearchBar,
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
            this.postFlowSingle ? this.postFlowSingle = false : this.postFlowSingle =true;
        },
        toggleMenu() {
            this.menuState = !this.menuState;
        },
    },
};
</script>
