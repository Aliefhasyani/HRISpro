<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="w-full h-20 px-4 sm:px-6 lg:px-8">
        <div class="flex items-center h-full">

            <!-- LEFT -->
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}">
                    <h1 class="font-extrabold text-2xl tracking-[10px] text-gray-900 dark:text-white font-[Quicksand]">
                        HRISPRO
                    </h1>
                </a>
            </div>

            <!-- CENTER -->
            <div class="hidden sm:flex flex-1 justify-center items-center space-x-8">
                <x-nav-link
                    :href="route('dashboard')"
                    :active="request()->routeIs('dashboard')"
                    class="text-xl tracking-widest font-bold font-[Quicksand]
                        border-b-0 hover:border-b-0 focus:border-b-0 hover:underline transition delay-150 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 "
                >
                    {{ __('DASHBOARD') }}
                </x-nav-link>
            </div>

            <!-- RIGHT -->
            <div class="flex items-center">
                <div class="hidden sm:flex sm:items-center">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 transition">
                                <div>{{ Auth::user()->name }}</div>
                                <svg class="ms-1 h-4 w-4 fill-current" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">Profile</x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link
                                    :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();"
                                >
                                    Log Out
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>

                <!-- MOBILE BUTTON -->
                <div class="sm:hidden ms-2">
                    <button @click="open = !open"
                        class="p-2 rounded-md text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 transition">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </div>
</nav>
