<template>
    <div class="flex p-4 sticky top-0 z-10 bg-white space-x-2">

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

        <div v-if="$page.component === 'Hub'" class="w-12 h-12 shrink-0 rounded-full flex justify-center items-center bg-[#EEF1F6] md:hidden" @click="changePostStructure">

            <svg v-if="!postFlowSingle" class="w-1/2 h-1/2" xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                <rect y="14" width="18" height="5" rx="1" fill="black"/>
                <rect width="18" height="12" rx="1" fill="black"/>
            </svg>

            <svg v-if="postFlowSingle" class="w-1/2 h-1/2" xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                <rect width="9" height="12" rx="1" fill="black"/>
                <rect y="14" width="9" height="5" rx="1" fill="black"/>
                <rect x="11" width="7" height="19" rx="1" fill="black"/>
            </svg>

        </div>

    </div>

    <slot :postFlowSingle="postFlowSingle" />

    <div class="fixed bottom-0 z-10 w-full flex md:justify-center md:py-4">
        <div class="flex justify-between items-center bg-white w-full p-4 md:rounded-full md:w-96 md:shadow-md">

            <Link href="/" class="w-12 h-12 rounded-full flex justify-center items-center bg-[#EEF1F6]" :class="{ 'ring-2 ring-black ring-offset-2':$page.component === 'Hub'}">
                <svg class="w-1/2 h-1/2" xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                    <rect width="9" height="12" rx="1" fill="black"/>
                    <rect y="14" width="9" height="5" rx="1" fill="black"/>
                    <rect x="11" width="7" height="19" rx="1" fill="black"/>
                </svg>
            </Link>

            <Link href="/jobs" class="w-12 h-12 rounded-full flex justify-center items-center bg-[#EEF1F6]" :class="{ 'ring-2 ring-black ring-offset-2':$page.component === 'Jobs'}">
                <svg class="w-1/2 h-1/2" xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                    <path d="M12 5H13V4V3C13 1.89543 12.1046 1 11 1H7C5.89543 1 5 1.89543 5 3V4V5H6H12Z" stroke="black" stroke-width="2"/>
                    <path d="M0 10H7V17H1C0.447715 17 0 16.5523 0 16V10Z" fill="black"/>
                    <path d="M11 10H18V16C18 16.5523 17.5523 17 17 17H11V10Z" fill="black"/>
                    <path d="M6 12H12V17H6V12Z" fill="black"/>
                    <path d="M0 5C0 4.44772 0.447715 4 1 4H17C17.5523 4 18 4.44772 18 5V8H0V5Z" fill="black"/>
                </svg>
            </Link>

            <Link href="/notifications" class="w-12 h-12 rounded-full flex justify-center items-center bg-[#EEF1F6]" :class="{ 'ring-2 ring-black ring-offset-2':$page.component === 'Notifications'}">
                <svg class="w-1/2 h-1/2" xmlns="http://www.w3.org/2000/svg" width="17" height="19" viewBox="0 0 17 19" fill="none">
                    <path d="M8.31253 19C9.62323 19 10.6864 17.8118 10.6864 16.5H5.93864C5.93864 17.8118 7.00182 19 8.31253 19ZM16.3055 13.4444C15.5886 12.674 14.2471 11.515 14.2471 7.71875C14.2471 4.83535 12.2253 2.52715 9.49928 1.96086V1.1875C9.49928 0.531777 8.96788 0 8.31253 0C7.65717 0 7.12577 0.531777 7.12577 1.1875V1.96086C4.39971 2.52715 2.37799 4.83535 2.37799 7.71875C2.37799 11.515 1.03649 12.674 0.319537 13.4444C0.0968811 13.6837 -0.00182981 13.9698 2.5657e-05 14.25C2.5657e-05 14.5 0.481705 14.5 1.19124 14.5H15.4338C16.1433 14.5 16.625 14.5 16.625 14.25C16.6269 13.9698 16.5282 13.6833 16.3055 13.4444Z" fill="black"/>
                </svg>
            </Link>

            <Link href="/portfolio" class="w-12 h-12 rounded-full flex justify-center items-center bg-[#EEF1F6]" :class="{ 'ring-2 ring-black ring-offset-2':$page.component === 'Portfolio'}">
                <img v-if="isAuth" class="rounded-full object-cover w-[100%] h-[100%]" src="https://source.unsplash.com/random/65" />
                <svg v-if="!isAuth" xmlns="http://www.w3.org/2000/svg" width="17" height="19" viewBox="0 0 17 19" fill="none">
                    <path d="M8.3125 9.5C10.9361 9.5 13.0625 7.37363 13.0625 4.75C13.0625 2.12637 10.9361 0 8.3125 0C5.68887 0 3.5625 2.12637 3.5625 4.75C3.5625 7.37363 5.68887 9.5 8.3125 9.5ZM11.6375 10.6875H11.0178C10.1939 11.066 9.27734 11.2812 8.3125 11.2812C7.34766 11.2812 6.43477 11.066 5.60723 10.6875H4.9875C2.23398 10.6875 0 12.9215 0 15.675V17.2188C0 18.2021 0.797852 19 1.78125 19H14.8438C15.8271 19 16.625 18.2021 16.625 17.2188V15.675C16.625 12.9215 14.391 10.6875 11.6375 10.6875Z" fill="black"/>
                </svg>
            </Link>

        </div>
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
            isAuth: true,
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
