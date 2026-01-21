<x-guest-layout>
    <div class="flex flex-col md:flex-row w-full h-full bg-white dark:bg-gray-900 overflow-hidden rounded-2xl shadow-2xl">

        <div class="hidden md:flex md:w-1/2 relative bg-slate-900">
            <div class="absolute inset-0 bg-cover bg-center opacity-60"
                 style="background-image: url('https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');">
            </div>

            <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 to-transparent"></div>

            <div class="relative z-10 flex flex-col justify-end w-full p-12 text-white">
                <h2 class="text-4xl font-bold font-[Quicksand] tracking-tight mb-2">
                    Welcome to HRISPRO
                </h2>
                <p class="text-blue-100 text-lg font-light leading-relaxed">
                    Streamline your workforce management. <br>
                    Efficient, reliable, and secure.
                </p>
            </div>
        </div>

        <div class="w-full md:w-1/2 flex flex-col justify-center p-8 md:p-14 bg-white dark:bg-gray-900 animate-fade-down">
            
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <div class="md:hidden flex justify-center mb-6">
                 <span class="text-2xl font-extrabold tracking-widest text-blue-700 dark:text-white uppercase font-[Quicksand]">
                    HRISPRO
                 </span>
            </div>

            <div class="mb-10">
                <h3 class="text-3xl font-bold text-slate-800 dark:text-white mb-2 font-[Quicksand]">
                    Sign In
                </h3>
                <p class="text-slate-500 dark:text-slate-400">
                    Enter your credentials to access your dashboard.
                </p>
            </div>

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <div class="group">
                    <x-input-label for="email" :value="__('Email Address')" class="!text-slate-600 dark:!text-slate-300 font-semibold mb-1" />
                    <div class="relative">
                        <x-text-input 
                            id="email" 
                            class="block w-full px-4 py-3 rounded-xl border-slate-200 bg-slate-50 text-slate-900 
                                   focus:ring-2 focus:ring-blue-600 focus:border-transparent focus:bg-white 
                                   transition-all duration-200 ease-in-out dark:bg-gray-800 dark:border-gray-700 dark:text-white" 
                            type="email" 
                            name="email" 
                            :value="old('email')" 
                            placeholder="name@company.com"
                            required 
                            autofocus />
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-slate-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" /></svg>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="group">
                    <x-input-label for="password" :value="__('Password')" class="!text-slate-600 dark:!text-slate-300 font-semibold mb-1" />
                    <x-text-input 
                        id="password" 
                        class="block w-full px-4 py-3 rounded-xl border-slate-200 bg-slate-50 text-slate-900
                               focus:ring-2 focus:ring-blue-600 focus:border-transparent focus:bg-white
                               transition-all duration-200 ease-in-out dark:bg-gray-800 dark:border-gray-700 dark:text-white" 
                        type="password" 
                        name="password" 
                        placeholder="••••••••"
                        required />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between">
                    <label class="inline-flex items-center cursor-pointer group">
                        <input type="checkbox" 
                               class="rounded border-gray-300 text-blue-700 shadow-sm focus:ring-blue-700 cursor-pointer" 
                               name="remember">
                        <span class="ms-2 text-sm text-slate-600 group-hover:text-slate-800 dark:text-slate-400 dark:group-hover:text-slate-200 transition-colors">
                            Remember me
                        </span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-sm font-semibold text-blue-700 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300 transition-colors" 
                           href="{{ route('password.request') }}">
                            Forgot Password?
                        </a>
                    @endif
                </div>

                <div class="pt-2">
                    <x-primary-button class="w-full justify-center py-4 text-base font-bold tracking-wide rounded-xl
                                           !bg-blue-700 hover:!bg-blue-800 hover:shadow-lg
                                           transform active:scale-[0.98] transition-all duration-200">
                        Sign In
                    </x-primary-button>
                </div>
            </form>

            <div class="mt-8 pt-6 border-t border-slate-100 dark:border-gray-800 text-center">
                <p class="text-slate-500 dark:text-slate-400 text-sm">
                    Don't have an account yet?
                    <a href="{{ route('register') }}" class="font-bold text-blue-700 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300 transition-colors ml-1">
                        Create an account
                    </a>
                </p>
            </div>
            
        </div>
    </div>
</x-guest-layout>