<x-guest-layout>
    <form method="POST"
          action="{{ route('register') }}"
          class="w-full px-8 py-10">
        @csrf

        <!-- LOGO -->
        <div class="flex justify-center mb-10">
            <a href="/"
               class="text-4xl font-extrabold tracking-[8px]
                      font-[Quicksand]
                      text-blue-700 dark:text-white
                      hover:tracking-[10px]
                      transition-all duration-300">
                HRISPRO
            </a>
        </div>

        <!-- HEADING -->
        <div class="text-center mb-8">
            <h2 class="text-xl font-semibold text-slate-900 dark:text-slate-100">
                Create your account
            </h2>
            <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">
                Start managing employees & HR data
            </p>
        </div>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input
                id="name"
                class="block mt-2 w-full rounded-lg
                       focus:border-indigo-500 focus:ring-indigo-500"
                type="text"
                name="name"
                :value="old('name')"
                required
                autofocus
                autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mt-6">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input
                id="email"
                class="block mt-2 w-full rounded-lg
                       focus:border-indigo-500 focus:ring-indigo-500"
                type="email"
                name="email"
                :value="old('email')"
                required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-6">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input
                id="password"
                class="block mt-2 w-full rounded-lg
                       focus:border-indigo-500 focus:ring-indigo-500"
                type="password"
                name="password"
                required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-6">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input
                id="password_confirmation"
                class="block mt-2 w-full rounded-lg
                       focus:border-indigo-500 focus:ring-indigo-500"
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- FOOTER LINKS -->
        <div class="mt-6 text-center text-sm text-slate-600 dark:text-slate-400">
            Already have an account?
            <a href="{{ route('login') }}"
               class="font-medium text-blue-700 hover:text-blue-800
                      dark:text-indigo-400 dark:hover:text-indigo-300
                      hover:underline transition">
                Sign in
            </a>
        </div>

        <!-- SUBMIT -->
        <div class="mt-8">
            <x-primary-button
                class="w-full justify-center py-3
                       !text-m font-semibold
                       !bg-blue-700 hover:bg-blue-800
                       focus:ring-blue-600 ">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
