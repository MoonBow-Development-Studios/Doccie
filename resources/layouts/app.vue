<template>
    <div id="background" class="w-screen h-screen flex flex-col bg-[#4158D0] bg-gradient-to-tr from-[#4158D0] via-[#C850C0] to-[#FFCC70]">
        <div id="content" class="py-2 px-2 flex justify-center items-center h-full">
            <div class="rounded-md w-full h-full shadow-md bg-white">
                <slot></slot>
            </div>
        </div>
    </div>
</template>
<script>
import '../js/grained.min.js'

export default {
    name: 'app_layout',
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
            }
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
        }
    },
    created() {
        this.waitForElm('#background').then(() => {
            grained('#background', this.grained_options);
        });
    }
}

</script>

<style scoped>
background-color: #4158D0;
background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);

</style>
