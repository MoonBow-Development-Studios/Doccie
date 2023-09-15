<template>
    <app_layout>
        <editor />
    </app_layout>
</template>
<script>
import App_layout from "../../layouts/app.vue";
import editor from "../../components/editor/editor.vue";
import tools_mobile from "../../components/editor/tools_mobile.vue";

import {useSettingsStore} from "../../stores/settings.js";
import showdown from "showdown";

export default {
    components: {
        tools_mobile,
        App_layout,
        editor,
    },
    setup() {
        const s = useSettingsStore();
        showdown.setOption('tables', true);
        showdown.setOption('tasklists', true);
        showdown.setOption('emoji', true);
        showdown.setFlavor('github');


        return {
            s // settings object
        }
    },
    created() {
      this.checkTheme();
    },
    methods: {
        checkTheme() {
            if (this.s.darkMode === 2 || (this.s.darkMode === 0 && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark')
            } else {
                document.documentElement.classList.remove('dark')
            }
        }
    }
}

</script>
