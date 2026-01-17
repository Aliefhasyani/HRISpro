<x-app-layout title="Homepage">

   
    <div class="min-h-[70vh] flex items-center justify-center px-4">
        <div class="w-full max-w-2xl
                    bg-white dark:bg-slate-900
                    border border-slate-200 dark:border-slate-700
                    shadow-xl rounded-2xl
                    p-10 text-center">

       

            @auth
                <h2 class="text-2xl sm:text-3xl font-semibold
                           text-slate-900 dark:text-slate-100 mb-2
                           font-[Quicksand]">
                    SELAMAT DATANG
                </h2>

                <p class="text-lg text-slate-600 dark:text-slate-300 font-[Quicksand]">
                    <span class="font-semibold font-[Quicksand] ">
                        {{ Auth::user()->employee->employee_name }}
                    </span>
                </p>

                <p class="text-sm text-slate-500 dark:text-slate-400 mt-1 font-[Quicksand]">
                    
                    <span class="font-medium font-[Quicksand]">
                        {{ Auth::user()->employee->employee_code }}
                    </span>
                </p>

                <div class="mt-6 text-M text-slate-600 dark:text-slate-400 font-[Quicksand]">
                    Bagaimana kabar Anda hari ini?
                </div>

                
            @endauth

            @guest
                <h2 class="text-2xl sm:text-3xl font-semibold
                           text-slate-900 dark:text-slate-100 mb-3 font-[Quicksand]">
                    SELAMAT DATANG
                </h2>

                <p class="text-base text-slate-600 dark:text-slate-300 font-[Quicksand]">
                    Silakan masuk untuk mengakses dashboard HR Anda
                </p>

                <div class="mt-8 flex justify-center gap-4 font-[Quicksand]">
                    <a href="{{ route('login') }}"
                       class="px-6 py-3 rounded-xl
                              font-[Quicksand]
                              bg-blue-700 hover:bg-blue-800
                              text-white text-sm font-semibold
                              transition">
                        Sign In
                    </a>

                    <a href="{{ route('register') }}"
                       class="px-6 py-3 rounded-xl
                                font-[Quicksand]
                              border border-blue-700
                              text-blue-700 hover:bg-blue-50
                              dark:text-indigo-400 dark:border-indigo-400
                              dark:hover:bg-indigo-400/10
                              text-sm font-semibold
                              transition ">
                        Register
                    </a>
                </div>
            @endguest

        </div>
    </div>

</x-app-layout>
