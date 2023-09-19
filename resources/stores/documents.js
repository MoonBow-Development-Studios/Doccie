import {defineStore} from "pinia";

export const useDocumentsStore = defineStore('documents', {
    state: () => ({
        documents: new Map(),
    }),
    actions: {
        addDocument(document){
            this.documents.set(document.id, document);
        },
        updateDocument(document){
            this.documents.set(document.id, document);
        },
        removeDocument(documentId){
            this.documents.delete(documentId);
        }
    },
    getters: {
        getDocument: (state) => (state, documentId) => {
            return state.documents.get(documentId);
        }
    }
});
