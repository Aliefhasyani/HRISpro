<x-guest-layout>
    <x-auth-session-status :status="session('status')" />

    <form method="POST"
          action="{{ route('login') }}"
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
                Sign in to your account
            </h2>
            <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">
                Manage employees, payroll & HR data
            </p>
        </div>

        <!-- Email -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input
                id="email"
                class="block mt-2 w-full rounded-lg
                       focus:border-indigo-500 focus:ring-indigo-500"
                type="email"
                name="email"
                :value="old('email')"
                required
                autofocus
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
                autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember -->
        <div class="mt-6 flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me"
                       type="checkbox"
                       class="rounded border-slate-300
                              text-indigo-600
                              focus:ring-indigo-500">
                <span class="ms-2 text-sm text-slate-600 dark:text-slate-400">
                    {{ __('Remember me') }}
                </span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm font-medium text-indigo-600 hover:underline"
                   href="{{ route('password.request') }}">
                    Forgot Password?
                </a>
            @endif

           

        </div>
        <div class="mt-6 text-center text-sm text-slate-600 dark:text-slate-400">
            Don’t have an account?
            <a href="{{ route('register') }}"
            class="font-medium text-blue-700 hover:text-blue-800
                    dark:text-indigo-400 dark:hover:text-indigo-300
                    hover:underline transition">
                Register
            </a>
        </div>

        <!-- SUBMIT -->
        <div class="mt-8">
            <x-primary-button
                class="w-full justify-center py-3
                       !text-m font-semibold
                       !bg-blue-700 hover:bg-blue-800
                       focus:ring-blue-600">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
