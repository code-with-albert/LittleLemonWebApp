<nav x-data="{ open: false, navToggle() { this.open = ! this.open } }" class="w-full">
    <!-- Primary Navigation Menu -->
    <div class="relative max-w-7xl mx-auto px-4 md:px-6 lg:px-8 bg-emerald-100" style="z-index: 1;"> 
        <div class="flex justify-between h-14">
            <div class="flex justify-between w-full">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-2 md:-my-px md:ms-10 md:flex">
                    <x-nav-link x-on:click="toggleMaintenance()" class="cursor-not-allowed" :active="request()->routeIs('menu')">{{ __('Menu') }}</x-nav-link>
                    <x-nav-link x-on:click="toggleMaintenance()" class="cursor-not-allowed" :active="request()->routeIs('reservation')">{{ __('Reservation') }}</x-nav-link>
                    <x-nav-link x-on:click="toggleMaintenance()" class="cursor-not-allowed" :active="request()->routeIs('order')">{{ __('Order Online') }}</x-nav-link>
                    <x-nav-link :href="route('reviews')" :active="request()->routeIs('reviews')">{{ __('Reviews') }}</x-nav-link>
                    <x-nav-link x-on:click="toggleMaintenance()" class="cursor-not-allowed" :active="request()->routeIs('about')">{{ __('About') }}</x-nav-link>
                    @guest
                        <x-nav-link :href="route('login')" id="loginNav" :active="request()->routeIs('login')">{{ __('Login') }}</x-nav-link>
                    @endguest

                    @auth
                        <!-- Settings Dropdown -->
                        <div class="inline-flex items-center px-3 py-2">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-orange-700 bg-transparent hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->first_name }}</div>

                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    @endauth
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center md:hidden">
                <button @click="navToggle()" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-emerald-500 hover:bg-yellow-300 focus:outline-none focus:bg-emerald-500 focus:text-yellow-200 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div x-cloak x-show='open' class="relative md:hidden" style="z-index: 0" 
        x-transition:enter="transition ease-out duration-500"
        x-transition:enter-start="-translate-x-1/4 opacity-0"
        x-transition:enter-end="translate-x-none opacity-100 "
        x-transition:leave="transition ease-in duration-500"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="-translate-x-1/4 opacity-0">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('menu')">{{ __('Menu') }}</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('reservation')">{{ __('Reservation') }}</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('order')">{{ __('Order Online') }}</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('reviews')" :active="request()->routeIs('reviews')">{{ __('Reviews') }}</x-responsive-nav-link>
            <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('about')">{{ __('About') }}</x-responsive-nav-link>
            @guest
            <x-responsive-nav-link :href="route('login')" id="loginNav" :active="request()->routeIs('login')">{{ __('Login') }}</x-responsive-nav-link>
        @endguest
        </div>
        @auth
            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->first_name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @endauth
    </div>
</nav>
