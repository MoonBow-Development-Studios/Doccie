<template>
    <form class="mt-4 space-y-3" action="/login" method="POST">
        <input name="_token" type="hidden" :value="csrf">
        <div class="-space-y-px rounded-md shadow-sm">
            <div v-if="$page.props.error !== undefined">
                <p class="text-xs mb-2 font-semibold text-red-500">{{$page.props.error}}</p>
            </div>
            <div>
                <label for="email-address" class="sr-only">E-mail</label>
                <input id="email-address" name="email" type="email" autocomplete="email" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Email address">
            </div>
            <div>
                <label for="password" class="sr-only">Password</label>
                <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Password">
            </div>
        </div>
        <div>
            <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-doccie-blue-500 py-2 px-4 text-sm font-medium text-white hover:bg-doccie-blue-700 focus:outline-none focus:ring-2 focus:ring-doccie-blue-500-500 focus:ring-offset-2">
          <span class="absolute inset-y-0 left-0 flex items-center pl-3">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-doccie-blue-700 group-hover:text-doccie-blue-500">
                  <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
              </svg>
          </span>
                Login
            </button>
        </div>
        <div class="text-doccie-blue-800 font-semibold">
            <p>No account? <a class="hover:cursor-pointer hover:underline" href="/register">Register here!</a></p>
        </div>
    </form>
</template>

<script>
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'
const page = usePage()
const csrf = computed(() => page.props.csrf)
export default {
    props: ['error'],
    setup() {
        return {
            csrf
        }
    },
}

</script>
