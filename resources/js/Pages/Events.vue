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
                    <img class="rounded-xl" src="https://source.unsplash.com/random/55"/>
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/12" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/65" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/72" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/83" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/92" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/44" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/92" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/25" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/42" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/56" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/52" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/77" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/12" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/48" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/22" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/59" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/32" />
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
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/83" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/91" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/20" />
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
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/50" />
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
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/89" />
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
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/31" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/45" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/79" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/86" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/30" />
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
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/55" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/57" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/42" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/34" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/67" />
                        </div>
                        <div class="text-gray-500">
                            <h1 class="text-[8px] font-black">Iqmal Nazlan</h1>
                            <h2 class="hidden text-sm md:block">Full-Stack developer</h2>
                        </div>
                    </div>
                </div>

                <div class="relative mb-6 rounded-xl space-y-4">
                    <img class="rounded-xl" src="https://source.unsplash.com/random/90" />
                    <div class="flex h-6 items-center justify-start space-x-2 md:h-10">
                        <div class="flex h-full w-6 shrink-0 items-center justify-center overflow-hidden rounded-full md:w-10">
                            <img class="h-full w-full object-cover" src="https://source.unsplash.com/random/20" />
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
            postFlowSingle: false,
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
