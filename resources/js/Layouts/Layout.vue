<template>
    <div class="flex p-4 sticky top-0 z-10 bg-white">

        <div class="w-full h-12 bg-[#EEF1F6] rounded-full flex " :class="{ 'ring-2 ring-black ring-offset-2':filterDrawerState }">
            <div class="w-12 h-12 shrink-0 rounded-l-full flex justify-center items-center">
                <div @click="focusSearch" class="rounded-l-full w-full h-full flex justify-center items-center" v-if="!filterDrawerState">
                    <svg class="w-1/2 h-1/2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z"/></svg>
                </div>
                <div @click="toggleFilterDrawer" class="rounded-l-full w-full h-full flex justify-center items-center" v-if="filterDrawerState">
                    <svg class="w-1/2 h-1/2" xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                        <rect x="2.12134" width="25" height="3" rx="1.5" transform="rotate(45 2.12134 0)" fill="black"/>
                        <rect x="0.121338" y="18" width="25" height="3" rx="1.5" transform="rotate(-45 0.121338 18)" fill="black"/>
                    </svg>
                </div>
            </div>

            <input ref='focusMe' type="text" class="w-full h-full bg-transparent outline-none pr-4 rounded-r-full" @focus="toggleFilterDrawer">
        </div>

        <div class="w-12 h-12 shrink-0 rounded-full flex justify-center items-center" @click="changePostStructure">
            <!--                        <svg class="w-1/2 h-1/2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>-->
            <svg v-if="postFlowSingle" class="w-1/2 h-1/2" xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                <rect x="1" y="1" width="16" height="10" rx="1" stroke="black" stroke-width="2"/>
                <rect x="1" y="15" width="16" height="3" rx="1" stroke="black" stroke-width="2"/>
            </svg>

            <svg v-if="!postFlowSingle" class="w-1/2 h-1/2" xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                <rect x="1" y="1" width="7" height="9" rx="1" stroke="black" stroke-width="2"/>
                <rect x="12" y="1" width="5" height="17" rx="1" stroke="black" stroke-width="2"/>
                <rect x="1" y="14" width="7" height="4" rx="1" stroke="black" stroke-width="2"/>
            </svg>
        </div>

    </div>

    <slot :postFlowSingle="postFlowSingle" />

<!--    <div class="grid grid-cols-5 bg-[#EEF1F6] w-full fixed bottom-0 z-10 px-4">-->
<!--        <div class="border-black flex justify-center items-center bg-[#EEF1F6] p-4">-->
<!--            <Link href="/portfolio" class="w-12 h-12 shrink-0 rounded-full flex justify-center items-center bg-[#EEF1F6] ring-2 ring-black ring-offset-2">-->
<!--                <img class="rounded-full object-cover w-[100%] h-[100%]" src="https://source.unsplash.com/random/65" />-->
<!--            </Link>-->
<!--        </div>-->
<!--        <div class="border-black flex justify-center items-center bg-[#EEF1F6] p-4">-->
<!--            <Link href="/portfolio" class="w-12 h-12 shrink-0 rounded-full flex justify-center items-center bg-[#EEF1F6] ring-2 ring-black ring-offset-2">-->
<!--                <img class="rounded-full object-cover w-[100%] h-[100%]" src="https://source.unsplash.com/random/65" />-->
<!--            </Link>-->
<!--        </div>-->
<!--        <div class="border-black flex justify-center items-center bg-[#EEF1F6] p-4">-->
<!--            <Link href="/portfolio" class="w-12 h-12 shrink-0 rounded-full flex justify-center items-center bg-[#EEF1F6] ring-2 ring-black ring-offset-2">-->
<!--                <img class="rounded-full object-cover w-[100%] h-[100%]" src="https://source.unsplash.com/random/65" />-->
<!--            </Link>-->
<!--        </div>-->
<!--        <div class="border-black flex justify-center items-center bg-[#EEF1F6] p-4">-->
<!--            <Link href="/portfolio" class="w-12 h-12 shrink-0 rounded-full flex justify-center items-center bg-[#EEF1F6] ring-2 ring-black ring-offset-2">-->
<!--                <img class="rounded-full object-cover w-[100%] h-[100%]" src="https://source.unsplash.com/random/65" />-->
<!--            </Link>-->
<!--        </div>-->
<!--        <div class="border-black flex justify-center items-center bg-[#EEF1F6] p-4">-->
<!--            <Link href="/portfolio" class="w-12 h-12 shrink-0 rounded-full flex justify-center items-center bg-[#EEF1F6] ring-2 ring-black ring-offset-2">-->
<!--                <img class="rounded-full object-cover w-[100%] h-[100%]" src="https://source.unsplash.com/random/65" />-->
<!--            </Link>-->
<!--        </div>-->
<!--    </div>-->

    <div class="flex justify-between items-center bg-white w-full fixed bottom-0 z-10 p-4 ">
        <Link href="/" class="w-12 h-12 rounded-full" :class="{ 'ring-2 ring-black ring-offset-2':$page.component === 'Hub'}">
            <img class="rounded-full object-cover w-[100%] h-[100%]" src="https://source.unsplash.com/random/65" />
        </Link>

        <Link href="/jobs" class="w-12 h-12 rounded-full" :class="{ 'ring-2 ring-black ring-offset-2':$page.component === 'Jobs'}">
            <img class="rounded-full object-cover w-[100%] h-[100%]" src="https://source.unsplash.com/random/65" />
        </Link>

        <Link href="/forum" class="w-12 h-12 rounded-full" :class="{ 'ring-2 ring-black ring-offset-2':$page.component === 'Forum'}">
            <img class="rounded-full object-cover w-[100%] h-[100%]" src="https://source.unsplash.com/random/65" />
        </Link>

        <Link href="/profile" class="w-12 h-12 rounded-full" :class="{ 'ring-2 ring-black ring-offset-2':$page.component === 'Profile'}">
            <img class="rounded-full object-cover w-[100%] h-[100%]" src="https://source.unsplash.com/random/65" />
        </Link>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'

export default {
    name: 'Layout',
    data() {
        return {
            filterDrawerState:false,
            postFlowSingle: false,
            navMenuState:false,
            searchInFocus: false,
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
        focusSearch() {
            this.$refs.focusMe.focus()
        },
        toggleFocusSearch() {
            this.searchInFocus = !this.searchInFocus;
        },
    },
};
</script>
