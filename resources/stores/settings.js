import {defineStore} from "pinia";

export const useSettingsStore = defineStore('settings', {
    state: () => ({
        appearance: "light",
        bg: {
            from: "#4158D0",
            via: "#C850C0",
            to: "#FFCC70",
            degrees: 90,
        },
        tools: {
            invertIconColors: false,
        }
    }),
    actions: {
        updateBg(bg){
            if (bg.from && bg.to) {
                if (!bg.via) {
                    bg.via = null;
                }
                if (!bg.degrees) {
                    bg.degrees = 90;
                }
                this.bg = bg;
             }
            },
        updateTools(tools){
            if (typeof tools.invertIconColors == "boolean") {
                this.tools.invertIconColors = tools.invertIconColors;
            }
        }
    },
    getters: {
        getSettings: (state) => state,
        getSettingProperty: () => (state, property) => {
            return state[property.toLowerCase()];
        }
    },
});
