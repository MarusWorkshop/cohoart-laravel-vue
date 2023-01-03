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
        <div class="relative h-full w-screen shrink-0 overflow-y-scroll bg-[#FFFFFF]" :class="{ 'drop-shadow-lg overflow-y-clip rounded-tl-3xl rounded-bl-3xl blur-[0.5px] rounded-xl pointer-events-none':navMenuState, 'md:px-24 lg:px-44':!navMenuState }">
            <div class="mb-6 p-4 space-y-4 w-full sticky top-0 z-10 bg-[#FFFFFF]">
                <div class="flex space-x-8 justify-between items-center">

<!--                    <svg class="w-10 h-10" :class="{ 'rotate-90':navMenuState }" @click="toggleMenu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>-->

                    <div class="w-12 h-12 md:w-14 md:h-14 shrink-0 rounded-full flex justify-center items-center bg-[#EEF1F6] shadow-md hover:shadow-none" :class="{ 'rotate-90 shadow-none':navMenuState }" @click="toggleMenu">
                        <svg class="w-1/2 h-1/2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
                    </div>

                    <div class="w-full h-10 flex justify-center items-center">
                        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" width="189" height="27" viewBox="0 0 189 27" fill="none">
                            <path d="M13.6649 26.5599C11.7049 26.5599 9.88489 26.2566 8.20489 25.6499C6.54823 25.0199 5.10156 24.1333 3.86489 22.9899C2.65156 21.8466 1.70656 20.4933 1.02989 18.9299C0.353226 17.3666 0.0148926 15.6399 0.0148926 13.7499C0.0148926 11.8599 0.353226 10.1333 1.02989 8.56994C1.70656 7.00661 2.65156 5.65328 3.86489 4.50994C5.10156 3.36661 6.54823 2.49161 8.20489 1.88494C9.88489 1.25494 11.7049 0.939941 13.6649 0.939941C16.0682 0.939941 18.1916 1.35994 20.0349 2.19994C21.9016 3.03994 23.4416 4.25327 24.6549 5.83994L19.4399 10.4949C18.7166 9.58494 17.9116 8.88494 17.0249 8.39494C16.1616 7.88161 15.1816 7.62494 14.0849 7.62494C13.2216 7.62494 12.4399 7.76494 11.7399 8.04494C11.0399 8.32494 10.4332 8.73327 9.91989 9.26994C9.42989 9.80661 9.04489 10.4599 8.76489 11.2299C8.48489 11.9766 8.34489 12.8166 8.34489 13.7499C8.34489 14.6833 8.48489 15.5349 8.76489 16.3049C9.04489 17.0516 9.42989 17.6933 9.91989 18.2299C10.4332 18.7666 11.0399 19.1749 11.7399 19.4549C12.4399 19.7349 13.2216 19.8749 14.0849 19.8749C15.1816 19.8749 16.1616 19.6299 17.0249 19.1399C17.9116 18.6266 18.7166 17.9149 19.4399 17.0049L24.6549 21.6599C23.4416 23.2233 21.9016 24.4366 20.0349 25.2999C18.1916 26.1399 16.0682 26.5599 13.6649 26.5599Z" fill="black"/>
                            <path d="M39.3721 26.5599C37.3888 26.5599 35.5455 26.2449 33.8421 25.6149C32.1621 24.9849 30.7038 24.0983 29.4671 22.9549C28.2305 21.7883 27.2621 20.4233 26.5621 18.8599C25.8855 17.2966 25.5471 15.5933 25.5471 13.7499C25.5471 11.8833 25.8855 10.1799 26.5621 8.63994C27.2621 7.07661 28.2305 5.72327 29.4671 4.57994C30.7038 3.41327 32.1621 2.51494 33.8421 1.88494C35.5455 1.25494 37.3888 0.939941 39.3721 0.939941C41.3788 0.939941 43.2221 1.25494 44.9021 1.88494C46.5821 2.51494 48.0405 3.41327 49.2771 4.57994C50.5138 5.72327 51.4705 7.07661 52.1471 8.63994C52.8471 10.1799 53.1971 11.8833 53.1971 13.7499C53.1971 15.5933 52.8471 17.2966 52.1471 18.8599C51.4705 20.4233 50.5138 21.7883 49.2771 22.9549C48.0405 24.0983 46.5821 24.9849 44.9021 25.6149C43.2221 26.2449 41.3788 26.5599 39.3721 26.5599ZM39.3721 19.8749C40.1421 19.8749 40.8538 19.7349 41.5071 19.4549C42.1838 19.1749 42.7671 18.7783 43.2571 18.2649C43.7705 17.7283 44.1671 17.0866 44.4471 16.3399C44.7271 15.5699 44.8671 14.7066 44.8671 13.7499C44.8671 12.7933 44.7271 11.9416 44.4471 11.1949C44.1671 10.4249 43.7705 9.78327 43.2571 9.26994C42.7671 8.73327 42.1838 8.32494 41.5071 8.04494C40.8538 7.76494 40.1421 7.62494 39.3721 7.62494C38.6021 7.62494 37.8788 7.76494 37.2021 8.04494C36.5488 8.32494 35.9655 8.73327 35.4521 9.26994C34.9621 9.78327 34.5771 10.4249 34.2971 11.1949C34.0171 11.9416 33.8771 12.7933 33.8771 13.7499C33.8771 14.7066 34.0171 15.5699 34.2971 16.3399C34.5771 17.0866 34.9621 17.7283 35.4521 18.2649C35.9655 18.7783 36.5488 19.1749 37.2021 19.4549C37.8788 19.7349 38.6021 19.8749 39.3721 19.8749Z" fill="black"/>
                            <path d="M72.0851 1.49994H80.3451V25.9999H72.0851V1.49994ZM64.4551 25.9999H56.1951V1.49994H64.4551V25.9999ZM72.6451 16.9699H63.8951V10.1799H72.6451V16.9699Z" fill="black"/>
                            <path d="M97.17 26.5599C95.1866 26.5599 93.3433 26.2449 91.64 25.6149C89.96 24.9849 88.5016 24.0983 87.265 22.9549C86.0283 21.7883 85.06 20.4233 84.36 18.8599C83.6833 17.2966 83.345 15.5933 83.345 13.7499C83.345 11.8833 83.6833 10.1799 84.36 8.63994C85.06 7.07661 86.0283 5.72327 87.265 4.57994C88.5016 3.41327 89.96 2.51494 91.64 1.88494C93.3433 1.25494 95.1866 0.939941 97.17 0.939941C99.1766 0.939941 101.02 1.25494 102.7 1.88494C104.38 2.51494 105.838 3.41327 107.075 4.57994C108.312 5.72327 109.268 7.07661 109.945 8.63994C110.645 10.1799 110.995 11.8833 110.995 13.7499C110.995 15.5933 110.645 17.2966 109.945 18.8599C109.268 20.4233 108.312 21.7883 107.075 22.9549C105.838 24.0983 104.38 24.9849 102.7 25.6149C101.02 26.2449 99.1766 26.5599 97.17 26.5599ZM97.17 19.8749C97.94 19.8749 98.6516 19.7349 99.305 19.4549C99.9816 19.1749 100.565 18.7783 101.055 18.2649C101.568 17.7283 101.965 17.0866 102.245 16.3399C102.525 15.5699 102.665 14.7066 102.665 13.7499C102.665 12.7933 102.525 11.9416 102.245 11.1949C101.965 10.4249 101.568 9.78327 101.055 9.26994C100.565 8.73327 99.9816 8.32494 99.305 8.04494C98.6516 7.76494 97.94 7.62494 97.17 7.62494C96.4 7.62494 95.6766 7.76494 95 8.04494C94.3466 8.32494 93.7633 8.73327 93.25 9.26994C92.76 9.78327 92.375 10.4249 92.095 11.1949C91.815 11.9416 91.675 12.7933 91.675 13.7499C91.675 14.7066 91.815 15.5699 92.095 16.3399C92.375 17.0866 92.76 17.7283 93.25 18.2649C93.7633 18.7783 94.3466 19.1749 95 19.4549C95.6766 19.7349 96.4 19.8749 97.17 19.8749Z" fill="black"/>
                            <path d="M110.991 25.9999L121.701 1.49994H129.821L140.531 25.9999H131.991L124.081 5.41994H127.301L119.391 25.9999H110.991ZM117.361 21.7299L119.461 15.7799H130.731L132.831 21.7299H117.361Z" fill="black"/>
                            <path d="M141.849 25.9999V1.49994H153.644C155.931 1.49994 157.903 1.87327 159.559 2.61994C161.239 3.36661 162.534 4.43994 163.444 5.83994C164.354 7.21661 164.809 8.84994 164.809 10.7399C164.809 12.6299 164.354 14.2633 163.444 15.6399C162.534 16.9933 161.239 18.0316 159.559 18.7549C157.903 19.4783 155.931 19.8399 153.644 19.8399H146.434L150.109 16.4449V25.9999H141.849ZM156.514 25.9999L150.494 17.0749H159.244L165.334 25.9999H156.514ZM150.109 17.3549L146.434 13.6099H153.119C154.263 13.6099 155.103 13.3533 155.639 12.8399C156.199 12.3266 156.479 11.6266 156.479 10.7399C156.479 9.85327 156.199 9.15327 155.639 8.63994C155.103 8.12661 154.263 7.86994 153.119 7.86994H146.434L150.109 4.12494V17.3549Z" fill="black"/>
                            <path d="M172.907 25.9999V7.90494H165.732V1.49994H188.342V7.90494H181.167V25.9999H172.907Z" fill="black"/>
                        </svg>
                    </div>

<!--                    <svg class="w-10 h-10" :class="{ 'rotate-0':filterDrawerState, 'rotate-45':!filterDrawerState }" @click="toggleFilterDrawer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z"/></svg>-->

                    <div class="w-12 h-12 md:w-14 md:h-14 shrink-0 rounded-full flex justify-center items-center bg-[#EEF1F6] shadow-md hover:shadow-none" :class="{ 'rotate-0 shadow-none':filterDrawerState, 'rotate-45':!filterDrawerState }" @click="toggleFilterDrawer">
                        <svg class="w-1/2 h-1/2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z"/></svg>
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
