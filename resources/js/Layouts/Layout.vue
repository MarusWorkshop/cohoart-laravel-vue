<template>
    <div class="group flex h-screen w-screen overflow-x-clip bg-[#EEF1F6]" :class="{ 'py-4':navMenuState }" @click.self="toggleMenu">
        <div class="flex h-full shrink-0 items-center justify-end transition-all" :class="{ 'md:w-72 w-60':navMenuState, 'w-0':!navMenuState }" @click.self="toggleMenu">
            <div class="flex w-full flex-col pr-4 space-y-4">
                <Link href="/" class="border-l-8 md:border-l-4 border-[#000000] py-4 pl-4 border-opacity-0 opacity-50 hover:opacity-100 text-[#000000] hover:border-opacity-100 font-sans text-2xl md:text-4xl font-bold hover:text-[#000000]" :class="{ 'opacity-100 border-opacity-100 text-[#000000]':$page.component === 'Hub'}">
                    Hub
                </Link>
                <Link href="/explore" class="border-l-8 md:border-l-4 border-[#000000] py-4 pl-4 border-opacity-0 opacity-50 hover:opacity-100 text-[#000000] hover:border-opacity-100 font-sans text-2xl md:text-4xl font-bold hover:text-[#000000]" :class="{ 'opacity-100 border-opacity-100 text-[#000000]':$page.component === 'Explore'}">
                    Explore
                </Link>
                <Link href="/events" class="border-l-8 md:border-l-4 border-[#000000] py-4 pl-4 border-opacity-0 opacity-50 hover:opacity-100 text-[#000000] hover:border-opacity-100 font-sans text-2xl md:text-4xl font-bold hover:text-[#000000]" :class="{ 'opacity-100 border-opacity-100 text-[#000000]':$page.component === 'Events'}">
                    Events
                </Link>
                <Link href="/jobs" class="border-l-8 md:border-l-4 border-[#000000] py-4 pl-4 border-opacity-0 opacity-50 hover:opacity-100 text-[#000000] hover:border-opacity-100 font-sans text-2xl md:text-4xl font-bold hover:text-[#000000]" :class="{ 'opacity-100 border-opacity-100 text-[#000000]':$page.component === 'Jobs'}">
                    Jobs
                </Link>
                <Link href="/portfolio" class="border-l-8 md:border-l-4 border-[#000000] py-4 pl-4 border-opacity-0 opacity-50 hover:opacity-100 text-[#000000] hover:border-opacity-100 font-sans text-2xl md:text-4xl font-bold hover:text-[#000000]" :class="{ 'opacity-100 border-opacity-100 text-[#000000]':$page.component === 'Portfolio'}">
                    Portfolio
                </Link>
            </div>
        </div>
        <div class="relative h-full w-screen shrink-0 overflow-y-scroll bg-[#FFFFFF]" :class="{ 'drop-shadow-lg overflow-y-clip rounded-tl-3xl rounded-bl-3xl blur-[0.5px] rounded-xl pointer-events-none':navMenuState, 'md:px-24':!navMenuState }">
            <Header v-bind:navMenuState="navMenuState" @toggleMenu="toggleMenu"/>
            <slot />
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
import Header from "../Components/Header.vue";

export default {
    name: 'Layout',
    data() {
        return {
            postFlowSingle: true,
            navMenuState:false,
        };
    },
    components: {
        Link,
        Header,
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
    },
};
</script>
