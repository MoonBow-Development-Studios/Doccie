<template>
    <div v-if="showLoginPill" class="inline-flex absolute top-0.5 left-1 ml-2 bg-doccie-blue-600 rounded-3xl text-white font-semibold py-2 px-3 align-middle">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mt-0.5 mr-0.5">
            <path fill-rule="evenodd" d="M17 10a.75.75 0 01-.75.75H5.612l4.158 3.96a.75.75 0 11-1.04 1.08l-5.5-5.25a.75.75 0 010-1.08l5.5-5.25a.75.75 0 111.04 1.08L5.612 9.25H16.25A.75.75 0 0117 10z" clip-rule="evenodd" />
        </svg>
        <a class="font-bold" href="/login">Back to login.</a>
    </div>
    <form class="mt-4 space-y-3" action="/register" method="POST">
        <input name="_token" type="hidden" :value="csrf">
        <div class="-space-y-px rounded-md">
            <div v-if="$page.props.error !== undefined">
                <p class="text-xs mb-2 font-semibold text-red-500">{{$page.props.error}}</p>
            </div>
            <div class="flex flex-col h-48 justify-between">
                <div class="flex flex-row justify-between">
                    <div class="w-full mr-2">
                        <label for="firstName" class="sr-only">First Name</label>
                        <input id="firstName" name="firstName" type="text" autocomplete="first-name" required class="relative block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="First Name">
                    </div>
                    <div class="w-full ml-2">
                        <label for="lastName" class="sr-only">Last Name</label>
                        <input id="lastName" name="lastName" type="text" autocomplete="last-name" required class="relative block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Last Name">
                    </div>
                </div>
                <div>
                    <label for="email-address" class="sr-only">E-mail</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required class="relative block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Email address">
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Password">
                </div>
                <div>
                    <label for="repeat_password" class="sr-only">Password</label>
                    <input id="repeat_password" name="repeatPassword" type="password" autocomplete="repeat_password" required class="relative block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Repeat password">
                </div>
            </div>
        </div>
        <div>
            <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-doccie-blue-500 py-2 px-4 text-sm font-medium text-white hover:bg-doccie-blue-700 focus:outline-none focus:ring-2 focus:ring-doccie-blue-500-500 focus:ring-offset-2">
          <span class="absolute inset-y-0 left-0 flex items-center pl-3">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-doccie-blue-700 group-hover:text-doccie-blue-500">
                  <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
              </svg>
          </span>
                Register
            </button>
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
    data() {
        return {
            showLoginPill: false
        }
    },
    setup() {
        return {
            csrf
        }
    },
    created() {
        // check if the referrer is the login page
        if (document.referrer === window.location.origin + '/login') {
            this.showLoginPill = true
        }
    }
}

</script>
