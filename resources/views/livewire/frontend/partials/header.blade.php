<header x-data="{
    mobileMenuOpen: false,
    isScrolled: false
}" x-init="window.addEventListener('scroll', () => {
    isScrolled = window.scrollY > 20
})" :class="{ 'glass pt-0!': isScrolled }" x-cloak
    class=" fixed top-0 left-0 right-0 z-50 bg-transparent pt-4 transition-all duration-300">

    <div class="container flex items-center justify-between py-3 px-6">
        <!-- Logo Section -->
        <a href="{{ route('home') }}" title="{{ __('ebSixOne') }}" wire:navigate class="flex items-center">
            <div class="bg-second-900/90 rounded-full flex items-center justify-center w-32 sm:w-36 lg:w-48 p-2"
                {{-- :class="{ ' bg-second-900/90 rounded-full': isScrolled }" --}}
                >
                <img src="{{ asset('assets/images/home_page/logo.png') }}" alt="{{ __('ebSixOne') }}"
                    class="h-6 sm:h-8 lg:h-10 object-contain" />
            </div>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center bg-second-900/90 rounded-full px-2 py-2 gap-1">
            <!-- Home -->
            <a href="{{ route('home') }}" wire:navigate
                class="px-5 py-2 rounded-full text-base transition-all
               {{ request()->routeIs('home') ? 'bg-white text-black shadow' : 'text-zinc-50 hover:bg-white/10 hover:text-white' }}">
                {{ __('Home') }}
            </a>

            <!-- About Us -->
            <a href="{{ route('about') }}"  wire:navigate
                class="px-5 py-2 rounded-full text-base transition-all
               {{ request()->routeIs('about') ? 'bg-white text-black shadow' : 'text-zinc-50 hover:bg-white/10 hover:text-white' }}">
                {{ __('About Us') }}
            </a>

            <!-- Services -->
            <a href="{{ route('services') }}"  wire:navigate
                class="px-5 py-2 rounded-full text-base transition-all
               {{ request()->routeIs('services') ? 'bg-white text-black shadow' : 'text-zinc-50 hover:bg-white/10 hover:text-white' }}">
                {{ __('Services') }}
            </a>

            <!-- Pages Dropdown -->
            <div class="relative" x-data="{ open: false }" @click.outside="open = false"
                @keydown.escape.window="open = false">
                <!-- Trigger -->
                <button type="button" @click="open = !open"
                    class="group px-5 py-2 rounded-full text-base text-zinc-50 transition-all hover:bg-white/10 hover:text-white! flex items-center gap-1 {{ request()->routeIs('method') || request()->routeIs('gallery') || request()->routeIs('faq') ? 'bg-white text-black! shadow' : '' }}">
                    {{ __('Pages') }}
                    <svg class="w-4 h-4 transition-transform duration-200 group-hover:stroke-white! {{ request()->routeIs('method') || request()->routeIs('gallery') || request()->routeIs('faq') ? 'stroke-black' : 'stroke-white' }}"
                        :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Dropdown -->
                <div x-show="open" x-transition x-cloak
                    class="absolute top-full mt-3 left-1/2 -translate-x-1/2 bg-zinc-950 rounded-2xl px-4 py-3 space-y-2 shadow-xl min-w-[160px]">
                    <a href="{{ route('gallery') }}" @click="open = false"  wire:navigate
                        class="block text-center px-4 py-1.5 rounded-full text-base {{ request()->routeIs('gallery') ? 'bg-second-500 text-white' : 'bg-white' }}">
                        {{ __('Gallery') }}
                    </a>
                    <a href="{{ route('method') }}" @click="open = false"  wire:navigate
                        class="block text-center px-4 py-1.5 rounded-full text-base {{ request()->routeIs('method') ? 'bg-second-500 text-white' : 'bg-white' }} text-black hover:bg-gray-200 transition">
                        {{ __('Methods') }}
                    </a>
                    <a href="{{ route('faq') }}" @click="open = false"  wire:navigate
                        class="block text-center px-4 py-1.5 rounded-full text-base {{ request()->routeIs('faq') ? 'bg-second-500 text-white' : 'bg-white' }} text-black hover:bg-gray-200 transition">
                        {{ __('FAQ') }}
                    </a>
                </div>
            </div>
        </nav>

        <!-- Desktop Contact Button -->
        <div class="hidden md:block">
            <x-ui.button href="{{ route('contact-us') }}" type="submit" class="w-auto! py-2!" variant="secondary">
                {{ __('Contact Us') }}
            </x-ui.button>
        </div>

        <!-- Mobile Menu Button -->
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 text-white"
            aria-label="{{ __('Toggle menu') }}">
            <flux:icon name="menu" class="w-8 h-8 stroke-white bg-second-900/90 rounded-md p-1" />
        </button>
    </div>

    <!-- Mobile Menu Overlay -->
    <div x-show="mobileMenuOpen" @click.self="mobileMenuOpen = false"
        x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" x-cloak
        class="md:hidden fixed inset-0 z-40 bg-second-900/90 backdrop-blur-sm p-6 overflow-y-auto">

        <nav class="flex flex-col gap-4">
            <a href="{{ route('home') }}" wire:navigate
                class="{{ request()->routeIs('home') ? 'text-second-500!': '' }} text-white text-lg font-medium hover:text-second-500 rounded-md pl-2 transition">{{ __('Home') }}</a>
            <a href="{{ route('about') }}" wire:navigate
                class="{{ request()->routeIs('about') ? 'text-second-500!': '' }} text-white text-lg font-medium hover:text-second-500 rounded-md pl-2 transition">{{ __('About Us') }}</a>
            <a href="{{ route('services') }}" wire:navigate
                class="{{ request()->routeIs('services') ? 'text-second-500!': '' }} text-white text-lg font-medium hover:text-second-500 rounded-md pl-2 transition">{{ __('Services') }}</a>
            <a href="{{ route('gallery') }}" wire:navigate
                class="{{ request()->routeIs('gallery') ? 'text-second-500!': '' }} text-white text-lg font-medium hover:text-second-500 rounded-md pl-2 transition">{{ __('Gallery') }}</a>
            <a href="{{ route('method') }}" wire:navigate
                class="{{ request()->routeIs('method') ? 'text-second-500!': '' }} text-white text-lg font-medium hover:text-second-500 rounded-md pl-2 transition">{{ __('Methods') }}</a>
            <a href="{{ route('faq') }}" wire:navigate
                class="{{ request()->routeIs('faq') ? 'text-second-500!': '' }} text-white text-lg font-medium hover:text-second-500 rounded-md pl-2 transition">{{ __('FAQ') }}</a>

            <!-- Mobile Contact Button -->
            <x-ui.button href="{{ route('contact-us') }}" class="w-full py-2 mt-4" variant="secondary">
                {{ __('Contact Us') }}
            </x-ui.button>
        </nav>
    </div>
</header>
