<x-guest-layout>
    <div class="flex flex-col md:flex-row w-full h-full bg-white dark:bg-gray-900 overflow-hidden rounded-2xl shadow-2xl">

        <div class="hidden md:flex md:w-1/2 relative bg-slate-900">
            <div class="absolute inset-0 bg-cover bg-center opacity-60"
                 style="background-image: url('https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');">
            </div>

            <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 to-transparent"></div>

            <div class="relative z-10 flex flex-col justify-end w-full p-12 text-white">
                <h2 class="text-4xl font-bold font-[Quicksand] tracking-tight mb-2">
                    Start Your Journey
                </h2>
                <p class="text-blue-100 text-lg font-light leading-relaxed">
                    Join thousands of companies managing their workforce <br> 
                    with HRISPRO today.
                </p>
            </div>
        </div>

        <div class="w-full md:w-1/2 flex flex-col justify-center p-8 md:p-14 bg-white dark:bg-gray-900 animate-fade-down">
            
            <div class="md:hidden flex justify-center mb-6">
                 <span class="text-2xl font-extrabold tracking-widest text-blue-700 dark:text-white uppercase font-[Quicksand]">
                    HRISPRO
                 </span>
            </div>

            <div class="mb-8">
                <h3 class="text-3xl font-bold text-slate-800 dark:text-white mb-2 font-[Quicksand]">
                    Create Account
                </h3>
                <p class="text-slate-500 dark:text-slate-400">
                    Get started with your free account.
                </p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <div class="group">
                    <x-input-label for="name" :value="__('Full Name')" class="!text-slate-600 dark:!text-slate-300 font-semibold mb-1" />
                    <x-text-input 
                        id="name" 
                        class="block w-full px-4 py-3 rounded-xl border-slate-200 bg-slate-50 text-slate-900 
                               focus:ring-2 focus:ring-blue-600 focus:border-transparent focus:bg-white 
                               transition-all duration-200 ease-in-out dark:bg-gray-800 dark:border-gray-700 dark:text-white" 
                        type="text" 
                        name="name" 
                        :value="old('name')" 
                        placeholder="John Doe"
                        required 
                        autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="group">
                    <x-input-label for="email" :value="__('Email Address')" class="!text-slate-600 dark:!text-slate-300 font-semibold mb-1" />
                    <x-text-input 
                        id="email" 
                        class="block w-full px-4 py-3 rounded-xl border-slate-200 bg-slate-50 text-slate-900 
                               focus:ring-2 focus:ring-blue-600 focus:border-transparent focus:bg-white 
                               transition-all duration-200 ease-in-out dark:bg-gray-800 dark:border-gray-700 dark:text-white" 
                        type="email" 
                        name="email" 
                        :value="old('email')" 
                        placeholder="name@company.com"
                        required />
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
                        required 
                        autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="group">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="!text-slate-600 dark:!text-slate-300 font-semibold mb-1" />
                    <x-text-input 
                        id="password_confirmation" 
                        class="block w-full px-4 py-3 rounded-xl border-slate-200 bg-slate-50 text-slate-900
                               focus:ring-2 focus:ring-blue-600 focus:border-transparent focus:bg-white
                               transition-all duration-200 ease-in-out dark:bg-gray-800 dark:border-gray-700 dark:text-white" 
                        type="password" 
                        name="password_confirmation" 
                        placeholder="••••••••"
                        required />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="pt-2">
                    <x-primary-button class="w-full justify-center py-4 text-base font-bold tracking-wide rounded-xl
                                           !bg-blue-700 hover:!bg-blue-800 hover:shadow-lg
                                           transform active:scale-[0.98] transition-all duration-200">
                        Create Account
                    </x-primary-button>
                </div>
            </form>

            <div class="mt-6 pt-6 border-t border-slate-100 dark:border-gray-800 text-center">
                <p class="text-slate-500 dark:text-slate-400 text-sm">
                    Already have an account?
                    <a href="{{ route('login') }}" class="font-bold text-blue-700 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300 transition-colors ml-1">
                        Sign in
                    </a>
                </p>
            </div>
            
        </div>
    </div>
</x-guest-layout>