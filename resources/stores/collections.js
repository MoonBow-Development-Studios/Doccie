import {defineStore} from "pinia";

export const useCollectionsStore = defineStore('collections', {
    state: () => ({
        collections: new Map(),
    }),
    actions: {
        addCollection(collection) {
            this.collections.set(collection.id, collection);
        },
        updateCollection(collection) {
            this.collections.set(collection.id, collection);
        },
        removeCollection(collectionId) {
            this.collections.delete(collectionId);
        },
    },
    getters: {
        getCollection: () => (state, collectionId) => {
            return state.collections.get(collectionId);
        }
    }
});
