<template>
        <div :style="`background-color: ${s.bg.from}; background: linear-gradient(180deg,
        ${emptyStringOrNull(s.bg.via) ?
        darkenColor(s.bg.from) + ' 0%, ' + darkenColor(s.bg.to) + ' 100%' :
        darkenColor(s.bg.from) + ' 0%, ' + darkenColor(s.bg.via) + ' 50%, ' +
        darkenColor(s.bg.to) + ' 100%'});`"
             class="absolute h-screen w-screen flex flex-col items-center justify-between z-50">
            <ms_topbar/>
            <list
                @createCollection="createCollection($event)"
            />
            <div id="spacer"></div>
            <searchbar class="absolute bottom-0 fixed"/>
        </div>
</template>

<script>
import {useSettingsStore} from "../../stores/settings.js";
import Ms_topbar from "../ui/mobile_screen/topbar.vue";
import Searchbar from "../ui/mobile_screen/searchbar.vue";
import List from "../ui/mobile_screen/list.vue";
export default {
    name: "menu_mobile",
    components: {List, Searchbar, Ms_topbar},
    data() {

    },
    setup() {
        const s = useSettingsStore();
        return {
            s // settings object
        }
    },
    methods: {
        darkenColor(hexColor, factor = 100) {
            // Remove the '#' symbol if present
            hexColor = hexColor.replace('#', '');

            if (hexColor.length !== 6) {
                throw new Error('Invalid hex color code');
            }

            // Parse the hexadecimal color components
            const r = parseInt(hexColor.substring(0, 2), 16);
            const g = parseInt(hexColor.substring(2, 4), 16);
            const b = parseInt(hexColor.substring(4, 6), 16);

            if (isNaN(r) || isNaN(g) || isNaN(b)) {
                throw new Error('Invalid hex color components');
            }

            // Calculate the darker shade by reducing each color component
            const newR = Math.max(0, r - factor);
            const newG = Math.max(0, g - factor);
            const newB = Math.max(0, b - factor);

            // Convert the color components back to hexadecimal and format the result
            const newHexR = Math.floor(newR).toString(16).padStart(2, '0');
            const newHexG = Math.floor(newG).toString(16).padStart(2, '0');
            const newHexB = Math.floor(newB).toString(16).padStart(2, '0');

            // Format the result as a hex color code (#RRGGBB)
            return `#${newHexR}${newHexG}${newHexB}`;
        },
        emptyStringOrNull(str) {
            return str === '' || str === null;
        },
        createCollection(e) {
            console.log(e.target.value.length);
            if (e.key !== 'Enter') {
                const maxLen = 25;
                if (e.target.value.length > maxLen) {
                    // cancel the event
                    // check if key is backspace or delete
                    if (e.keyCode !== 8 && e.keyCode !== 46) {
                        e.preventDefault();
                    }
                }
                return;
            }
            console.log(e.target.value);
        }
    }
}
</script>
