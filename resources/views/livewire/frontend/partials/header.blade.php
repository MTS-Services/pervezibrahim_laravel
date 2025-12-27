<header x-data="{ mobileMenuOpen: false }" x-cloak class="sticky top-0 z-50 bg-transparent ">
    <div class="container flex items-center justify-between py-3 px-6">
        <!-- Logo Section -->
        <a href="{{ route('home') }}" title="{{ __('ebSixOne') }}" wire:navigate class="flex items-center">

            <div class="flex items-center justify-center  w-40 h-14 lg:w-48 lg:h-16 ">

                <img src="{{ asset('assets/images/home_page/logo.png') }}" alt="{{ __('ebSixOne') }}"
                    class="h-8 lg:h-10 object-contain" />
            </div>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center bg-second-900/90 rounded-full px-2 py-2 gap-1">

            <!-- Home -->
            <a href="{{ route('home') }}" wire:navigate
                class="px-5 py-2 rounded-full text-sm  transition-all
       {{ request()->routeIs('home')
           ? 'bg-white text-black shadow'
           : 'text-gray-300 hover:bg-white/10 hover:text-white' }}">
                {{ __('Home') }}
            </a>

            <!-- About Us -->
            <a href="#"
                class="px-5 py-2 rounded-full text-sm  transition-all
       text-gray-300 hover:bg-white/10 hover:text-white">
                {{ __('About Us') }}
            </a>

            <!-- Services -->
            <a href="#"
                class="px-5 py-2 rounded-full text-sm  transition-all
       text-gray-300 hover:bg-white/10 hover:text-white">
                {{ __('Services') }}
            </a>

            <!-- Pages Dropdown -->
            <div class="relative" x-data="{ open: false }" @click.outside="open = false"
                @keydown.escape.window="open = false">

                <!-- Trigger -->
                <button type="button" @click="open = !open"
                    class="px-5 py-2 rounded-full text-sm  text-gray-300
                transition-all hover:bg-white/10 hover:text-white
                flex items-center gap-1">

                    {{ __('Pages') }}

                    <svg class="w-4 h-4 transition-transform duration-200 stroke-white" :class="{ 'rotate-180': open }"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Dropdown -->
                <div x-show="open" x-transition x-cloak
                    class="absolute top-full mt-3 left-1/2 -translate-x-1/2
             bg-[#0b0f1a] rounded-2xl px-4 py-3 space-y-2
             shadow-xl min-w-[160px]">

                    <!-- Gallery -->
                    <a href="#" @click="open = false"
                        class="block text-center px-4 py-1.5 rounded-full text-sm 
               bg-blue-600 text-white">
                        {{ __('Gallery') }}
                    </a>

                    <!-- Methods -->
                    <a href="#" @click="open = false"
                        class="block text-center px-4 py-1.5 rounded-full text-sm 
               bg-white text-black hover:bg-gray-200 transition">
                        {{ __('Methods') }}
                    </a>

                    <!-- FAQ -->
                    <a href="#" @click="open = false"
                        class="block text-center px-4 py-1.5 rounded-full text-sm 
               bg-white text-black hover:bg-gray-200 transition">
                        {{ __('FAQ') }}
                    </a>

                </div>
            </div>

        </nav>

        <div class="hidden md:block">
            {{-- <x-language /> --}}
            <x-ui.button type="submit" class="w-auto! py-2!" variant="secondary">
                {{ __('Contact Us') }}
            </x-ui.button>
        </div>


        <!-- Mobile Menu Button -->
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 text-text-muted"
            aria-label="{{ __('Toggle menu') }}">
            <flux:icon name="menu" class="w-6 h-6 stroke-white" />
        </button>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 transform -translate-y-2"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform -translate-y-2" x-cloak
        class="md:hidden border-t border-gray-200 bg-zinc-100">

        <nav class="container mx-auto px-6 py-4 flex flex-col gap-4">

            <!-- Home -->
            <a href="{{ route('home') }}" wire:navigate
                class="font-inter transition-colors
                {{ request()->routeIs('home') ? 'text-second-500 underline' : 'text-white hover:text-second-500' }}">
                {{ __('Home') }}
            </a>
            <a href="{{ route('home') }}" wire:navigate
                class="font-inter transition-colors
                {{ request()->routeIs('home') ? 'text-second-500 underline' : 'text-white hover:text-second-500' }}">
                {{ __('About Us') }}
            </a>
            <a href="{{ route('home') }}" wire:navigate
                class="font-inter transition-colors
                {{ request()->routeIs('home') ? 'text-second-500 underline' : 'text-white hover:text-second-500' }}">
                {{ __('Services') }}
            </a>

            <!-- Pages (Mobile Dropdown) -->
            <div x-data="{ open: false }" class="flex flex-col">

                <!-- Trigger -->
                <button type="button" @click="open = !open"
                    class="flex items-center justify-between font-inter
                    text-white hover:text-second-500 transition">

                    <span>{{ __('Pages') }}</span>

                    <svg class="w-4 h-4 transition-transform duration-200" :class="{ 'rotate-180': open }"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Dropdown Items -->
                <div x-show="open" x-transition x-cloak class="mt-3 ml-4 flex flex-col gap-3">

                    <a href="#" class="text-sm text-white hover:text-second-500 transition">
                        {{ __('Gallery') }}
                    </a>

                    <a href="#" class="text-sm text-white hover:text-second-500 transition">
                        {{ __('Methods') }}
                    </a>

                    <a href="#" class="text-sm text-white hover:text-second-500 transition">
                        {{ __('FAQ') }}
                    </a>
                </div>
            </div>

            <!-- Contact -->
            <x-ui.button type="button" class="w-auto py-2" variant="secondary">
                {{ __('Contact Us') }}
            </x-ui.button>

        </nav>
    </div>

</header>
