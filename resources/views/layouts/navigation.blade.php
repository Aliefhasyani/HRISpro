<nav id="main-navbar"
     class="bg-blue-400 backdrop-blur-md shadow-md
            sticky top-0 z-50
            transition-all duration-300 ease-in-out">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <div class="flex items-center gap-10">

                <a href="{{ route('home') }}"
                   class="text-xl font-extrabold tracking-widest
                          text-white
                          font-[Quicksand]
                          hover:text-blue-100
                          transition">
                    HRISPRO
                </a>

                <div class="hidden sm:flex items-center gap-8">
                    @php
                        $navClass = 'relative text-sm font-semibold uppercase tracking-wide
                                    text-white/90 hover:text-white
                                    after:absolute after:left-0 after:-bottom-1
                                    after:h-[2px] after:w-0
                                    after:bg-white
                                    hover:after:w-full
                                    after:transition-all after:duration-300';

                        $activeClass = 'after:w-full text-white';
                    @endphp


                    <a href="{{ route('home') }}"
                        class="{{ $navClass }} {{ request()->routeIs('home') ? $activeClass : '' }}">
                            Home
                    </a>

                    <a href="{{ route('user.dashboard') }}"
                        class="{{ $navClass }} {{ request()->routeIs('user.dashboard') ? $activeClass : '' }}">
                            Dashboard
                    </a>

                    <a href="#"
                        class="{{ $navClass }}">
                            Features
                    </a>


         
                </div>
            </div>

            <div class="hidden sm:flex items-center">

            @auth
                <div class="relative group">
                    <button
                        class="flex items-center gap-2
                               text-sm font-semibold text-white
                               hover:text-blue-100 transition">
                        {{ Auth::user()->name }}
                        <svg class="w-4 h-4 transition-transform group-hover:rotate-180"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <div class="absolute right-0 mt-3 w-40
                                bg-white border border-slate-200
                                rounded-lg shadow-xl
                                opacity-0 invisible
                                group-hover:opacity-100 group-hover:visible
                                transition-all duration-200 transform origin-top-right">

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                    class="w-full text-left px-4 py-3
                                           text-sm font-semibold text-red-600
                                           hover:bg-red-50 rounded-lg transition">
                                Logout
                            </button>
                        </form>

                    </div>
                </div>
            @endauth


                @guest
                    <a href="{{ route('login') }}"
                       class="text-sm font-semibold text-white
                              hover:text-blue-100 transition">
                        Login
                    </a>

                    <a href="{{ route('register') }}"
                       class="ml-4 px-5 py-2 rounded-lg
                              bg-white hover:bg-slate-100
                              text-black text-sm font-bold
                              transition shadow-sm">
                        Register
                    </a>
                @endguest

            </div>

            <div class="flex items-center sm:hidden">
                <button id="mobile-menu-button"
                        class="p-2 rounded-lg
                               text-white hover:bg-blue-500
                               transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <div id="mobile-menu"
         class="hidden sm:hidden bg-white border-t border-slate-100 shadow-lg">
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
                <div class="pt-3 border-t border-slate-100 mt-3">
                    <a href="{{ route('login') }}"
                       class="block text-sm font-semibold text-slate-700 hover:text-blue-700">
                        Login
                    </a>

                    <a href="{{ route('register') }}"
                       class="mt-3 block text-center px-4 py-3 rounded-lg
                              bg-blue-600 hover:bg-blue-700
                              text-white text-sm font-semibold">
                        Register
                    </a>
                </div>
            @endguest
        </div>
    </div>
</nav>