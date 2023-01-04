<template>
    <Layout>
        <div class="columns-1 p-4 pb-24">
            <div class="w-full bg-[#EAEBEC] mb-6 rounded-xl p-4 flex space-x-4 items-center">
                <div class="h-28 w-28  bg-[#D9D9D9] rounded-xl shrink-0"></div>
                <div class="w-full">
                    <h1 class="font-bold text-2xl text-gray-700 ">LOREM IPSUM</h1>
                    <p class="font-light text-lg text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="w-full bg-[#EAEBEC] mb-6 rounded-xl p-4 flex space-x-4 items-center">
                <div class="h-28 w-28 bg-[#D9D9D9] rounded-xl shrink-0"></div>
                <div class="w-full">
                    <h1 class="font-bold text-2xl text-gray-700 ">LOREM IPSUM</h1>
                    <p class="font-light text-lg text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="w-full bg-[#EAEBEC] mb-6 rounded-xl p-4 flex space-x-4 items-center">
                <div class="h-28 w-28 bg-[#D9D9D9] rounded-xl shrink-0"></div>
                <div class="w-full">
                    <h1 class="font-bold text-2xl text-gray-700 ">LOREM IPSUM</h1>
                    <p class="font-light text-lg text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="w-full bg-[#EAEBEC] mb-6 rounded-xl p-4 flex space-x-4 items-center">
                <div class="h-28 w-28 bg-[#D9D9D9] rounded-xl shrink-0"></div>
                <div class="w-full">
                    <h1 class="font-bold text-2xl text-gray-700 ">LOREM IPSUM</h1>
                    <p class="font-light text-lg text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="w-full bg-[#EAEBEC] mb-6 rounded-xl p-4 flex space-x-4 items-center">
                <div class="h-28 w-28 bg-[#D9D9D9] rounded-xl shrink-0"></div>
                <div class="w-full">
                    <h1 class="font-bold text-2xl text-gray-700 ">LOREM IPSUM</h1>
                    <p class="font-light text-lg text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="w-full bg-[#EAEBEC] mb-6 rounded-xl p-4 flex space-x-4 items-center">
                <div class="h-28 w-28 bg-[#D9D9D9] rounded-xl shrink-0"></div>
                <div class="w-full">
                    <h1 class="font-bold text-2xl text-gray-700 ">LOREM IPSUM</h1>
                    <p class="font-light text-lg text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="w-full bg-[#EAEBEC] mb-6 rounded-xl p-4 flex space-x-4 items-center">
                <div class="h-28 w-28 bg-[#D9D9D9] rounded-xl shrink-0"></div>
                <div class="w-full">
                    <h1 class="font-bold text-2xl text-gray-700 ">LOREM IPSUM</h1>
                    <p class="font-light text-lg text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="w-full bg-[#EAEBEC] mb-6 rounded-xl p-4 flex space-x-4 items-center">
                <div class="h-28 w-28 bg-[#D9D9D9] rounded-xl shrink-0"></div>
                <div class="w-full">
                    <h1 class="font-bold text-2xl text-gray-700 ">LOREM IPSUM</h1>
                    <p class="font-light text-lg text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="w-full bg-[#EAEBEC] mb-6 rounded-xl p-4 flex space-x-4 items-center">
                <div class="h-28 w-28 bg-[#D9D9D9] rounded-xl shrink-0"></div>
                <div class="w-full">
                    <h1 class="font-bold text-2xl text-gray-700 ">LOREM IPSUM</h1>
                    <p class="font-light text-lg text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>

            <div class="w-full bg-[#EAEBEC] mb-6 rounded-xl p-4 flex space-x-4 items-center">
                <div class="h-28 w-28 bg-[#D9D9D9] rounded-xl shrink-0"></div>
                <div class="w-full">
                    <h1 class="font-bold text-2xl text-gray-700 ">LOREM IPSUM</h1>
                    <p class="font-light text-lg text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from "../Layouts/Layout.vue";

export default {
    name: 'Jobs' +
        '',
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
