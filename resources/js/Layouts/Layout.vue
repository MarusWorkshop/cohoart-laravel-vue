<template>
    <div class="group flex h-screen w-screen overflow-x-clip bg-[#EEF1F6]" :class="{ 'py-4':navMenuState }" @click.self="toggleMenu">
        <div class="flex h-full shrink-0 items-center justify-end transition-all" :class="{ 'md:w-72 w-60':navMenuState, 'w-0':!navMenuState }" @click.self="toggleMenu">
            <div class="flex w-full flex-col pr-4 space-y-4">
                <Link href="/" class="border-l-8 md:border-l-4 border-[#000000] py-4 pl-4 border-opacity-0 opacity-50 hover:opacity-100 text-[#000000] hover:border-opacity-100 font-sans text-2xl md:text-4xl font-bold hover:text-[#000000]" :class="{ 'opacity-100 border-opacity-100 text-[#000000]':$page.component === 'Hub'}">Hub</Link>
                <Link href="/feed" class="border-l-8 md:border-l-4 border-[#000000] py-4 pl-4 border-opacity-0 opacity-50 hover:opacity-100 text-[#000000] hover:border-opacity-100 font-sans text-2xl md:text-4xl font-bold hover:text-[#000000]" :class="{ 'opacity-100 border-opacity-100 text-[#000000]':$page.component === 'Feed'}">Feed</Link>
                <Link href="/events" class="border-l-8 md:border-l-4 border-[#000000] py-4 pl-4 border-opacity-0 opacity-50 hover:opacity-100 text-[#000000] hover:border-opacity-100 font-sans text-2xl md:text-4xl font-bold hover:text-[#000000]" :class="{ 'opacity-100 border-opacity-100 text-[#000000]':$page.component === 'Events'}">Events</Link>
                <Link href="/jobs" class="border-l-8 md:border-l-4 border-[#000000] py-4 pl-4 border-opacity-0 opacity-50 hover:opacity-100 text-[#000000] hover:border-opacity-100 font-sans text-2xl md:text-4xl font-bold hover:text-[#000000]" :class="{ 'opacity-100 border-opacity-100 text-[#000000]':$page.component === 'Jobs'}">Jobs</Link>
                <Link href="/portfolio" class="border-l-8 md:border-l-4 border-[#000000] py-4 pl-4 border-opacity-0 opacity-50 hover:opacity-100 text-[#000000] hover:border-opacity-100 font-sans text-2xl md:text-4xl font-bold hover:text-[#000000]" :class="{ 'opacity-100 border-opacity-100 text-[#000000]':$page.component === 'Portfolio'}">Portfolio</Link>
            </div>
        </div>
        <div class="relative h-full w-screen shrink-0 overflow-y-scroll bg-[#FFFFFF]" :class="{ 'drop-shadow-lg overflow-y-clip rounded-tl-3xl rounded-bl-3xl blur-[0.5px] rounded-xl pointer-events-none':navMenuState }">
            <div class="mb-6 p-4 space-y-4 w-screen sticky top-0 z-10 bg-[#FFFFFF]">
                <div class="flex space-x-4 justify-between items-center ">
                    <div class="w-14 h-14 shrink-0 bg-[#EEF1F6] rounded-full flex justify-center items-center shadow-md" :class="{ 'rotate-90 shadow-none':navMenuState }" @click="toggleMenu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="14" viewBox="0 0 25 14" fill="none">
                            <rect width="25" height="5" fill="black"/>
                            <rect y="9" width="25" height="5" fill="black"/>
                        </svg>
                    </div>
                    <div class="w-full h-14 bg-[#EEF1F6] rounded-full shadow-inner">
                        <input ref='focusMe' type="text" class="w-full h-full bg-transparent outline-none px-4" autofocus>
                    </div>
                    <div class="w-14 h-14 shrink-0 bg-[#EEF1F6] rounded-full flex justify-center items-center shadow-md" @click="toggleFilterDrawer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                            <path d="M8.86603 13.5C8.48113 14.1667 7.51887 14.1667 7.13397 13.5L0.205772 1.5C-0.179128 0.833335 0.301997 3.6014e-07 1.0718 4.27438e-07L14.9282 1.6388e-06C15.698 1.7061e-06 16.1791 0.833335 15.7942 1.5L8.86603 13.5Z" fill="black"/>
                        </svg>
                    </div>
                </div>
                <div :class="{ 'block': filterDrawerState, 'hidden': !filterDrawerState }">
                    <div class="w-full h-14 bg-[#EEF1F6] rounded-full shadow-inner">
                        <input ref='focusMe' type="text" class="w-full h-full bg-transparent outline-none px-4" autofocus>
                    </div>
                </div>
            </div>
            <slot />
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'

export default {
    name: 'HubV3',
    data() {
        return {
            postFlowSingle: true,
            navMenuState:false,
            filterDrawerState:false,
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
        hubToExplore() {
            this.$inertia.get('/explore')
        },
        changePostStructure() {
            this.postFlowSingle = !this.postFlowSingle;
        },
        toggleMenu() {
            this.navMenuState = !this.navMenuState;
        },
        toggleFilterDrawer() {
            this.filterDrawerState = !this.filterDrawerState;
        },
    },
};
</script>
