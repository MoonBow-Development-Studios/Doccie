<template>
    <div class="w-full text-white flex flex-row items-center hover:bg-gray-400 hover:bg-clip-padding hover:bg-opacity-20 bg-gray-300 text-center rounded-xl px-3 py-3 bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-40 border border-gray-100">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
            <path fill-rule="evenodd" d="M3.75 3A1.75 1.75 0 002 4.75v10.5c0 .966.784 1.75 1.75 1.75h12.5A1.75 1.75 0 0018 15.25v-8.5A1.75 1.75 0 0016.25 5h-4.836a.25.25 0 01-.177-.073L9.823 3.513A1.75 1.75 0 008.586 3H3.75zM10 8a.75.75 0 01.75.75v1.5h1.5a.75.75 0 010 1.5h-1.5v1.5a.75.75 0 01-1.5 0v-1.5h-1.5a.75.75 0 010-1.5h1.5v-1.5A.75.75 0 0110 8z" clip-rule="evenodd" />
        </svg>
        <p class="pl-4 w-full overflow-hidden box-border">
            <input type="text" v-on:keydown="$emit('createCollection', $event)" placeholder="New collection" class="p-0 bg-transparent overflow-hidden box-border focus:outline-0 focus:ring-0 border-0 placeholder-white w-full text-white">
        </p>
    </div>
</template>

<script>
export default {
    name: "createCollection",
    data() {
        return {

        }
    },
}
</script>
