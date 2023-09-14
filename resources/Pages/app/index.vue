<template>
    <app_layout>
        <div v-show="!previewMode" class="py-2 px-2 w-full h-full">
            <textarea class="w-full h-full overflow-hidden resize-none text-sm">TEST</textarea>
        </div>
        <div v-show="previewMode" class="py-2 px-2 w-full h-full" :v-html="html"></div>
    </app_layout>
</template>
<script>
import App_layout from "../../layouts/app.vue";

export default {
    components: {
        App_layout
    },
    data() {
        return {
            html: '',
            previewMode: false
        }
    }
}

</script>
