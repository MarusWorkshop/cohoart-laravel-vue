<script>
export default {
    name: 'SearchBar',
    data() {
        return {
        };
    },
    components: {
    },
    props:    {
    },
    computed: {
    },
    watch:    {
    },
    methods:  {
    },
    // async mounted() {
    //     await this.$nextTick(() => this.$refs.focusMe.focus())
    // },
};
</script>

<template>
    <div class="w-full h-20 p-4">
        <div class="w-full h-full rounded-xl bg-[#EAEBEC]">
            <input ref='focusMe' type="text" class="w-full h-full bg-transparent outline-none px-4" autofocus>
        </div>
    </div>
</template>
