<template>
    <div class="absolute bottom-1 mb-4 flex flex-row-reverse justify-center w-full">
        <div class="pr-4 h-12 min-w-[3rem] bg-gray-200 dark:bg-slate-700 drop-shadow-2xl w-ful px-3 py-3 flex flex-row items-center justify-between gap-6 rounded-full border-2 border-gray-400">

            <!--tools?-->
            <div class="flex flex-row justify-center items-center bg-transparent rounded-full hover:bg-gray-300 dark:hover:bg-slate-800 px-2 py-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-5 h-5 fill-gray-600 dark:fill-white">
                    <path fill-rule="evenodd" d="M14.5 10a4.5 4.5 0 004.284-5.882c-.105-.324-.51-.391-.752-.15L15.34 6.66a.454.454 0 01-.493.11 3.01 3.01 0 01-1.618-1.616.455.455 0 01.11-.494l2.694-2.692c.24-.241.174-.647-.15-.752a4.5 4.5 0 00-5.873 4.575c.055.873-.128 1.808-.8 2.368l-7.23 6.024a2.724 2.724 0 103.837 3.837l6.024-7.23c.56-.672 1.495-.855 2.368-.8.096.007.193.01.291.01zM5 16a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd" />
                    <path d="M14.5 11.5c.173 0 .345-.007.514-.022l3.754 3.754a2.5 2.5 0 01-3.536 3.536l-4.41-4.41 2.172-2.607c.052-.063.147-.138.342-.196.202-.06.469-.087.777-.067.128.008.257.012.387.012zM6 4.586l2.33 2.33a.452.452 0 01-.08.09L6.8 8.214 4.586 6H3.309a.5.5 0 01-.447-.276l-1.7-3.402a.5.5 0 01.093-.577l.49-.49a.5.5 0 01.577-.094l3.402 1.7A.5.5 0 016 3.31v1.277z" />
                </svg>
            </div>

            <!--pencil-->
            <div class="flex flex-row justify-center items-center bg-transparent rounded-full hover:bg-gray-300 dark:hover:bg-slate-800 px-2 py-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-600 dark:text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                </svg>

            </div>

            <!--eye-->
            <div v-on:click="this.$emit('preview')" class="flex flex-row justify-center items-center bg-transparent rounded-full hover:bg-gray-300 dark:hover:bg-slate-800 px-2 py-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"  viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-600 dark:text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </div>
        </div>
    </div>
</template>

<script>
import { useSettingsStore } from "../../stores/settings.js";

export default {
    name: 'tools_mobile',
    setup() {
        const s = useSettingsStore();
        return {
            s // settings object
        }
    },
    methods: {
        emptyStringOrNull(str) {
            return str === '' || str === null;
        }
    }
}
</script>
