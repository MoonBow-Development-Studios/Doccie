import {defineStore} from "pinia";

export const useCategoryStore = defineStore('category', {
    state: () => ({
       categories: new Map(),
    }),
    actions: {
        addCategory(category){
            this.categories.set(category.id, category);
        },
        updateCategory(category){
            this.categories.set(category.id, category);
        },
        removeCategory(categoryId){
            this.categories.delete(categoryId);
        }
    },
    getters: {
        getCategory: () => (state, categoryId) => {
            return state.categories.get(categoryId);
        },
        getCategories: (state) => (state) => {
            return state.categories;
        }
    }
});
