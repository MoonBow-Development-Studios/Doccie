<template>
    <div v-show="!previewMode" class="py-2 px-2 w-full rounded-md h-full dark:bg-slate-700">
        <textarea id="editor" class="dark:bg-slate-700 dark:text-white rounded-md w-full h-full overflow-hidden resize-none text-sm focus:outline-0"></textarea>
    </div>
    <div v-show="previewMode" class="py-2 px-2 w-full h-full rounded-md dark:bg-slate-700">
        <div v-html="html" class="dark:bg-slate-700 dark:text-white rounded-md w-full h-full overflow-hidden prose lg:prose-xl dark:prose-invert"></div>
    </div>
    <tools_mobile
        @preview="preview"
    />
</template>
<script>
import tools_mobile from "./tools_mobile.vue";
import showdown from 'showdown';
export default {
    components: {
        tools_mobile
    },
    data() {
        return {
            html: '',
            previewMode: false
        }
    },
    setup() {
        return {
            converter: new showdown.Converter()
        }
    },
    methods: {
        preview() {
            this.previewMode = !this.previewMode;
            if (this.previewMode) {
                const editor = document.getElementById('editor');
                const text = editor.value;
                this.html = this.converter.makeHtml(text);
                console.log(this.html, text)
            }
        }
    }
}

</script>
