<div class="flex h-screen overflow-hidden">
    <div class="sticky inset-0 bg-slate-900 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200 opacity-0 pointer-events-none" aria-hidden="true"></div>
    <div class="flex flex-col sticky z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-72 lg:w-20 lg:sidebar-expanded:!w-64 2xl:!w-64 shrink-0 bg-slate-800 p-4 transition-all duration-200 ease-in-out -translate-x-64">
        <div class="flex justify-between mb-10 pr-3 sm:px-2"></div>
        <div class="space-y-8">
            <div>
                <h3 class="text-xs uppercase text-slate-500 font-semibold pl-3">SOBAT BEBEK</h3>
                <ul class="mt-3">
                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false">
                        <a href="{{ route('peternak.dashboard') }}" class="block text-slate-200 truncate transition duration-150 hover:text-white">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center"><span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Dashboard</span></div> 
                            </div>
                        </a>
                    </li>
                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-slate-200 hover:text-white focus:outline-none transition ease-in-out duration-150">
                                    <div>Data Peternak</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('peternak.bebek')">
                                    {{ __('Data Bebek') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('peternak.kandang')">
                                    {{ __('Data Kandang') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('peternak.pakan')">
                                    {{ __('Data Pakan') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('peternak.telur')">
                                    {{ __('Data Telur') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </li>
                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false">
                        <a href="{{ route('peternak.invest') }}" class="block text-slate-200 truncate transition duration-150 hover:text-white">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center"><span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Data Investasi Peternakan</span></div> 
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="text-slate-200 px-3 py-2">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
    
                        <x-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();" class="text-slate-200 bottom-8 absolute">
                            {{ __('Log Out') }}
                        </x-nav-link>
                    </form>                
                </div>
            </div>
        </div>
    </div>
</div>

