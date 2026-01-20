<nav id="main-navbar"
     class="bg-white/90 backdrop-blur-0
            border-b border-slate-200
            sticky top-0 z-50
            transition-all duration-300 ease-in-out">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- LEFT -->
            <div class="flex items-center gap-10">

                <!-- LOGO -->
                <a href="{{ route('home') }}"
                   class="text-xl font-extrabold tracking-widest
                          font-[Quicksand]
                          text-slate-900
                          hover:text-blue-700
                          transition">
                    HRISPRO
                </a>

                <!-- DESKTOP NAV -->
                <div class="hidden sm:flex items-center gap-8">
                    @php
                        $navClass = 'relative text-sm font-semibold uppercase tracking-wide
                                    text-slate-700 hover:text-black
                                    after:absolute after:left-0 after:-bottom-1
                                    after:h-[2px] after:w-0
                                    after:bg-black
                                    hover:after:w-full
                                    after:transition-all after:duration-300';
                    @endphp

                    <x-nav-link
                        :href="route('home')"
                        :active="request()->routeIs('home')"
                        class="{{ $navClass }} !border-b-0">
                        Home
                    </x-nav-link>

                    <a href="#" class="{{ $navClass }}">About</a>
                    <a href="#" class="{{ $navClass }}">Features</a>
                </div>
            </div>

            <!-- RIGHT -->
            <div class="hidden sm:flex items-center">

                @auth
                    <button class="flex items-center gap-2
                                   text-sm font-semibold text-slate-700
                                   hover:text-slate-900 transition">
                        {{ Auth::user()->name }}
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                @endauth

                @guest
                    <a href="{{ route('login') }}"
                       class="text-sm font-semibold text-slate-600
                              hover:text-slate-900 transition">
                        Login
                    </a>

                    <a href="{{ route('register') }}"
                       class="ml-4 px-5 py-2 rounded-lg
                              bg-blue-700 hover:bg-blue-800
                              text-white text-sm font-semibold
                              transition shadow-sm">
                        Register
                    </a>
                @endguest

            </div>

            <!-- MOBILE BUTTON -->
            <div class="flex items-center sm:hidden">
                <button id="mobile-menu-button"
                        class="p-2 rounded-lg
                               text-slate-600 hover:text-slate-900
                               hover:bg-slate-100 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobile-menu"
         class="hidden sm:hidden bg-white border-t border-slate-200">
        <div class="px-4 py-4 space-y-3">

            <a href="{{ route('home') }}"
               class="block text-sm font-semibold text-slate-700 hover:text-blue-700">
                Home
            </a>

            <a href="#" class="block text-sm font-semibold text-slate-700 hover:text-blue-700">
                About
            </a>

            <a href="#" class="block text-sm font-semibold text-slate-700 hover:text-blue-700">
                Features
            </a>

            @guest
                <div class="pt-3 border-t border-slate-200">
                    <a href="{{ route('login') }}"
                       class="block text-sm font-semibold text-slate-700 hover:text-blue-700">
                        Login
                    </a>

                    <a href="{{ route('register') }}"
                       class="mt-2 block text-center px-4 py-2 rounded-lg
                              bg-blue-700 hover:bg-blue-800
                              text-white text-sm font-semibold">
                        Register
                    </a>
                </div>
            @endguest

        </div>
    </div>
</nav>
