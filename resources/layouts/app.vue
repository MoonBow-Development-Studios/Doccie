<template>
<!--    <menu_mobile/>-->
    <!--Setting the background color based on the settings object-->
    <div id="background"
         :style="`background-color: ${s.bg.from};
         background: linear-gradient(${s.bg.degrees}deg,
         ${emptyStringOrNull(s.bg.via) ? `${s.bg.from} 0%, ${s.bg.to} 100%` :
         `${s.bg.from} 0%, ${s.bg.via} 50%, ${s.bg.to} 100%`});`"
         class="w-screen h-screen flex flex-col">

        <div id="content" class="py-2 px-2 flex justify-center items-center h-full">
            <div class="rounded-md w-full h-full shadow-md bg-white z-40">
                <slot ></slot>
            </div>
        </div>
    </div>
</template>
<script>
import '../js/grained.min.js'
import {useSettingsStore} from "../stores/settings.js";
import Menu_mobile from "../components/screens/menu_mobile.vue";
export default {
    name: 'app_layout',
    components: {Menu_mobile},
    data() {
        return {
            grained_options: {
                animate: false,
                patternWidth: 100,
                patternHeight: 100,
                grainOpacity: 0.05,
                grainDensity: 1,
                grainWidth: 1,
                grainHeight: 1
            },
        }
    },
    methods: {
        waitForElm(selector) {
            return new Promise(resolve => {
                if (document.querySelector(selector)) {
                    return resolve(document.querySelector(selector));
                }
                const observer = new MutationObserver(mutations => {
                    if (document.querySelector(selector)) {
                        observer.disconnect();
                        resolve(document.querySelector(selector));
                    }
                });
                observer.observe(document.body, {
                    childList: true,
                    subtree: true
                });
            });
        },
        emptyStringOrNull(str) {
            return str === '' || str === null;
        }
    },
    created() {
        this.waitForElm('#background').then(() => {
            grained('#background', this.grained_options);
        });
    },
    setup() {
        const s = useSettingsStore();
        return {
            s // settings object
        }
    }
}

</script>
