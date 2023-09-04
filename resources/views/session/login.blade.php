<x-layout.session>
    <form class="mt-4 space-y-3" action="/login" method="POST">
        @csrf
        <div class="-space-y-px rounded-md shadow-sm">
            @error('error')
            <p class="text-xs mb-2 font-bold text-red-500">Login not found.</p>
            @enderror
            <div>
                <label for="email-address" class="sr-only">E-mail</label>
                <input id="email-address" name="email" type="email" autocomplete="email" value="{{ old('email') }}" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Email address">
            </div>
            <div>
                <label for="password" class="sr-only">Password</label>
                <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Password">
            </div>
        </div>
        <div>
            <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
          <span class="absolute inset-y-0 left-0 flex items-center pl-3">
            <!-- Heroicon name: mini/lock-closed -->
            @svg('heroicon-m-lock-closed', 'h-5 w-5 text-indigo-500 group-hover:text-indigo-400')
          </span>
                Login
            </button>
        </div>
    </form>
</x-layout.session>
