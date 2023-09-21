<template>
    <div class="absolute bottom-1 mb-4 flex flex-row-reverse justify-center w-full">
        <div class="pr-4 h-12 min-w-[3rem] bg-gray-200 dark:bg-slate-700 drop-shadow-2xl w-ful px-3 py-3 flex flex-row items-center justify-between gap-6 rounded-full border-2 border-gray-400">

            <!--share-->
            <div id="share" v-on:click="$refs.tooltip.toggleTooltip();" class="flex flex-row justify-center items-center bg-transparent rounded-full hover:bg-gray-300 dark:hover:bg-slate-800 px-2 py-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
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
        <tooltip class="w-7/12" ref="tooltip">
            <div class="flex flex-col">
                <div class="w-full mb-2">
                    <p class="text-lg font-bold text-left">Share note</p>
                    <p class="text-sm text-gray-300">You can easily share notes using Doccie! The recipient doesn't need an account.</p>
                </div>
                <p class="mb-2 font-bold ">Who can see this note? 👀</p>
                <div class="flex items-center mb-4">
                    <input v-model="shareType" checked id="private_note" type="radio" value="private" name="private_note" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="private_note" class="ml-2 text-sm font-medium text-white dark:text-gray-300">🙈 - Only for my eyes</label>
                </div>
                <div class="flex items-center">
                    <input v-model="shareType" id="public_note" type="radio" value="public" name="public_note" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="public_note" class="ml-2 text-sm font-medium text-white dark:text-gray-300">🙉️ - I want to share it!</label>
                </div>
                <button
                    type="button"
                    :disabled="(shareType === 'private')"
                    class="text-blue-700 disabled:text-gray-700 w-full mt-2 hover:text-white border border-blue-700 disabled:border-gray-700 hover:bg-blue-800 hover:disabled:bg-transparent focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 text-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Copy link</button>
            </div>
        </tooltip>
    </div>
</template>

<script>
import { useSettingsStore } from "../../stores/settings.js";
import Tooltip from "../ui/util/tooltip.vue";

export default {
    name: 'tools_mobile',
    components: {Tooltip},
    data() {
      return {
          shareType: 'private'
      }
    },
    setup() {
        const s = useSettingsStore();
        return {
            s // settings object
        }
    },
    methods: {
        emptyStringOrNull(str) {
            return str === '' || str === null;
        },
    }
}
</script>
