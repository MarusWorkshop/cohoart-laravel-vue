<script>
import MobileNavBar from '../Components/MobileNavBar.vue'
import SearchBar from "../Components/SearchBar.vue";
import { Inertia } from '@inertiajs/inertia'

export default {
    name: 'Hub',
    data() {
        return {
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
        }
    },
};
</script>

<template>
    <MobileNavBar/>
    <SearchBar  @click="hubToExplore"/>

    <div class="pb-24">
        <div class="px-4 flex flex-col space-y-2 mb-6">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-bold text-gray-700">Feature</h1>
                <div class="flex space-x-2 items-center">
                    <div class="rounded-full w-2 h-2 bg-gray-400"></div>
                    <div class="rounded-full w-2 h-2 bg-[#EAEBEC]"></div>
                    <div class="rounded-full w-2 h-2 bg-[#EAEBEC]"></div>
                    <div class="rounded-full w-2 h-2 bg-[#EAEBEC]"></div>
                </div>
            </div>
            <div class="relative">
                <div class="w-full h-60 bg-[#EAEBEC] rounded-xl"></div>
                <div class="absolute top-0 left-0 w-full h-full rounded-xl p-4 flex justify-start items-end">
                    <div class="bg-[#D9D9D9] rounded-xl w-20 h-20"></div>
                </div>
            </div>
        </div>

        <div class="px-4 flex flex-col space-y-2 mb-6">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-bold text-gray-700">Events</h1>
                <div class="flex space-x-2 items-center">
                    <div class="rounded-full w-2 h-2 bg-gray-400"></div>
                    <div class="rounded-full w-2 h-2 bg-[#EAEBEC]"></div>
                    <div class="rounded-full w-2 h-2 bg-[#EAEBEC]"></div>
                    <div class="rounded-full w-2 h-2 bg-[#EAEBEC]"></div>
                </div>
            </div>
            <div class="relative">
                <div class="w-full h-96 bg-[#EAEBEC] rounded-xl"></div>
                <div class="absolute top-0 left-0 w-full h-full rounded-xl p-4 flex justify-start items-end">
                    <div class="bg-[#D9D9D9] rounded-xl w-20 h-20"></div>
                </div>
            </div>
        </div>

        <div class="px-4 flex flex-col space-y-2 mb-6">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-bold text-gray-700">Creators</h1>
                <div class="flex space-x-2 items-center">
                    <div class="rounded-full w-2 h-2 bg-gray-400"></div>
                    <div class="rounded-full w-2 h-2 bg-[#EAEBEC]"></div>
                    <div class="rounded-full w-2 h-2 bg-[#EAEBEC]"></div>
                    <div class="rounded-full w-2 h-2 bg-[#EAEBEC]"></div>
                </div>
            </div>
            <div class="overflow-x-scroll flex space-x-6">
                <div class="relative">
                    <div class="w-52 h-64 bg-[#EAEBEC] rounded-xl"></div>
                    <div class="absolute top-0 left-0 w-full h-full rounded-xl p-4 flex justify-start items-end">
                        <div class="bg-[#D9D9D9] rounded-xl w-20 h-20"></div>
                    </div>
                </div>
                <div class="relative">
                    <div class="w-52 h-64 bg-[#EAEBEC] rounded-xl"></div>
                    <div class="absolute top-0 left-0 w-full h-full rounded-xl p-4 flex justify-start items-end">
                        <div class="bg-[#D9D9D9] rounded-xl w-20 h-20"></div>
                    </div>
                </div>
                <div class="relative">
                    <div class="w-52 h-64 bg-[#EAEBEC] rounded-xl"></div>
                    <div class="absolute top-0 left-0 w-full h-full rounded-xl p-4 flex justify-start items-end">
                        <div class="bg-[#D9D9D9] rounded-xl w-20 h-20"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-4 flex flex-col space-y-2 mb-6">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-bold text-gray-700">Posts</h1>
                <div class="flex space-x-2 items-center">
                    <div class="rounded-full w-2 h-2 bg-gray-400"></div>
                    <div class="rounded-full w-2 h-2 bg-[#EAEBEC]"></div>
                    <div class="rounded-full w-2 h-2 bg-[#EAEBEC]"></div>
                    <div class="rounded-full w-2 h-2 bg-[#EAEBEC]"></div>
                </div>
            </div>
            <div class="columns-1 md:columns-3xs grow overflow-y-scroll pb-24">
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
</template>


