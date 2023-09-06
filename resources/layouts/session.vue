<template>
    <main class="max-w-lg mx-auto mt-20 bg-white border border-gray-200 p-6 rounded-xl shadow shadow-xl z-100">
        <div class="flex items-center justify-center py-6 px-4 sm:px-6 lg:px-8">
            <div class="w-full max-w-md space-y-8">
                <div>
                    <img class="mx-auto h-40 rounded-sm" src="/assets/img/logo_icon_whitebg_selection.png" alt="Doccie">
                    <h2 class="mt-6 mb-1 text-center text-4xl font-medium tracking-tight text-gray-800">Doccie - {{page}}</h2>
                </div>
                <slot></slot>
            </div>
        </div>
    </main>
    <div class="absolute bottom-1 ml-2 text-xs" id="credits">
        <span>Doccie is developed and maintained by <a href="https://www.moonbowstudios.net" class="text-doccie-blue-600 hover:underline">MoonBow Development Studios.</a></span>
    </div>
</template>

<script>
    export default {
        name: "session_layout",
        props: ['page'],
        data() {
            return {}
        },
    }
</script>

<style>

body {
    height: 100vh;
    width: 100vw;
    overflow: hidden;
    margin: 0;
    padding: 0;
    background: rgb(255,248,240);
    background: linear-gradient(180deg, rgba(255,248,240,1) 0%, rgba(251,222,190,1) 100%);
    background-size: cover;
}

</style>
