<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('kategori-camilan.index')" :active="request()->routeIs('kategori-camilan.index')">
                        {{ __('Kategori Camilan') }}
                    </x-nav-link>
                    <x-nav-link :href="route('transaksi.index')" :active="request()->routeIs('transaksi.index')">
                        {{ __('Transaksi') }}
                    </x-nav-link>
                    <x-nav-link :href="route('laporan.index')" :active="request()->routeIs('laporan.index')">
                        {{ __('Laporan') }}
                    </x-nav-link>
                    <x-nav-link :href="route('pelanggan.index')" :active="request()->routeIs('pelanggan.index')">
                        {{ __('Pelanggan') }}
                    </x-nav-link>
                    <x-nav-link :href="route('statistik.index')" :active="request()->routeIs('statistik.index')">
                        {{ __('Statistik') }}
                    </x-nav-link>
                    <x-nav-link :href="route('settings.index')" :active="request()->routeIs('settings.index')">
                        {{ __('Settings') }}
                    </x-nav-link>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>
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

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-nav-link>
        <x-nav-link :href="route('kategori-camilan.index')" :active="request()->routeIs('kategori-camilan.index')">
            {{ __('Kategori Camilan') }}
        </x-nav-link>
        <x-nav-link :href="route('transaksi.index')" :active="request()->routeIs('transaksi.index')">
            {{ __('Transaksi') }}
        </x-nav-link>
        <x-nav-link :href="route('laporan.index')" :active="request()->routeIs('laporan.index')">
            {{ __('Laporan') }}
        </x-nav-link>
        <x-nav-link :href="route('statistik.index')" :active="request()->routeIs('statistik.index')">
            {{ __('Statistik') }}
        </x-nav-link>
        <x-nav-link :href="route('settings.index')" :active="request()->routeIs('settings.index')">
            {{ __('Settings') }}
        </x-nav-link>
    </div>
</nav>
