<template>
    <div id="tooltipContent" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
        <slot></slot>
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
</template>

<script>
import {Tooltip} from "flowbite";

export default {
    name: "tooltip",
    data() {
        return {
            tooltip: null,
            isShowingTooltip: false,
        }
    },
    created() {
        let TTTarget;
        let TTTrigger;

        this.waitForElm('#share').then(() => {
            TTTarget = document.getElementById('tooltipContent');
            TTTrigger = document.getElementById('share');

            const options = {
                placement: 'top',
                triggerType: 'click',
            };
            this.tooltip = new Tooltip(TTTarget, TTTrigger, options);
        });
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
        toggleTooltip() {
            if (this.isShowingTooltip) {
                this.tooltip.hide();
                this.isShowingTooltip = false;
            } else {
                this.tooltip.show();
                this.isShowingTooltip = true;
            }
        },
    }

}
</script>
