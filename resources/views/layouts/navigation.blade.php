<nav x-data="{ open: false }"
     class="sticky top-0 z-50 backdrop-blur-md
            bg-blue-700 dark:bg-slate-900">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between">

            <!-- LEFT: LOGO -->
            <a href="{{ route('home') }}" class="group">
                <span class="text-2xl font-extrabold tracking-[6px]
                             font-[Quicksand]
                             text-white
                             ">
                    HRISPRO
                </span>
            </a>

            <!-- CENTER: NAV LINKS -->
            <div class="hidden sm:flex items-center gap-10">
                <x-nav-link
                    :href="route('home')"
                    :active="request()->routeIs('home')"
                    class="relative !text-base font-medium uppercase tracking-[3px]
                        text-white/80
                        hover:text-white
                        after:absolute after:left-0 after:-bottom-1
                        after:h-[2px] after:w-0
                        after:bg-indigo-400
                        hover:after:w-full
                        after:transition-all after:duration-300
                        !border-b-0"
                >
                    Home
                </x-nav-link>
                <x-nav-link
                    :href="route('home')"
                    :active="request()->routeIs('home')"
                    class="relative !text-base font-medium uppercase tracking-[3px]
                        text-white/80
                        hover:text-white
                        after:absolute after:left-0 after:-bottom-1
                        after:h-[2px] after:w-0
                        after:bg-indigo-400
                        hover:after:w-full
                        after:transition-all after:duration-300
                        !border-b-0"
                >
                    DASHBOARD
                </x-nav-link>
                <x-nav-link
                    :href="route('home')"
                    :active="request()->routeIs('home')"
                    class="relative !text-base font-medium uppercase tracking-[3px]
                        text-white/80
                        hover:text-white
                        after:absolute after:left-0 after:-bottom-1
                        after:h-[2px] after:w-0
                        after:bg-indigo-400
                        hover:after:w-full
                        after:transition-all after:duration-300
                        !border-b-0"
                >
                    ABOUT
                </x-nav-link>
            </div>

            <!-- RIGHT -->
            <div class="flex items-center gap-4">

                @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center gap-2 px-4 py-2
                                           rounded-full border border-white/20
                                           text-sm font-medium text-white
                                           hover:bg-white/10
                                           transition">
                                <span>{{ Auth::user()->name }}</span>
                                <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293
                                             a1 1 0 111.414 1.414l-4 4a1 1 0
                                             01-1.414 0l-4-4a1 1 0 010-1.414z"
                                          clip-rule="evenodd" />
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                Profile
                            </x-dropdown-link>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link
                                    :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    Log Out
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @endauth

                @guest
                    <a href="{{ route('login') }}"
                       class="px-5 py-2 rounded-full text-sm font-semibold
                              bg-white text-blue-700
                              hover:bg-slate-100 transition">
                        Sign In
                    </a>
                @endguest

                <!-- MOBILE -->
                <button @click="open = !open"
                        class="sm:hidden p-2 rounded-md
                               text-white hover:bg-white/10 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open }"
                              stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open }"
                              stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2"
                              d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

            </div>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <div x-show="open" x-transition
         class="sm:hidden bg-blue-800 dark:bg-slate-800">
        <div class="px-4 py-4 space-y-3">
            <a href="{{ route('home') }}"
               class="block text-sm font-semibold text-white">
                Home
            </a>
        </div>
    </div>

</nav>
