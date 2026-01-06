<footer class="bg-gray-50 pb-4">
    <div class="container px-4 py-8 sm:py-10 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 lg:gap-12">
            <!-- Brand Section -->
            <div class="md:col-span-12 lg:col-span-6">
                <div class="flex items-center gap-2 mb-4">
                    <img src="{{ asset('assets/images/home_page/logo_black.png') }}" alt="DiodioGlow" class="h-8 sm:h-10">
                </div>
                <p class="text-sm sm:text-base text-zinc-700 leading-relaxed mb-6">
                    {{ __('Unlock flexible freelance work through our cognition-based qualification system. Join our network, and start earning on AI-related tasks.') }}
                </p>

                <!-- Contact Info -->
                <div class="space-y-3 mb-8 md:mb-0">
                    <a href="mailto:support@ebsixone.com"
                        class="flex items-center gap-2 text-gray-700 hover:text-zinc-900 transition-colors text-sm sm:text-base">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">
                            </path>
                        </svg>
                        <span class="break-all">support@ebsixone.com</span>
                    </a>

                    <a href="mailto:careers@ebsixone.com"
                        class="flex items-center gap-2 text-gray-700 hover:text-zinc-900 transition-colors text-sm sm:text-base">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span class="break-all">careers@ebsixone.com</span>
                    </a>

                    <a href="mailto:press@ebsixone.com"
                        class="flex items-center gap-2 text-gray-700 hover:text-zinc-900 transition-colors text-sm sm:text-base">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
                            </path>
                        </svg>
                        <span class="break-all">press@ebsixone.com</span>
                    </a>
                </div>
            </div>

            <!-- Platform & Company Section - Side by Side on Mobile -->
            <div class="md:col-span-12 lg:col-span-6 grid grid-cols-2 gap-8">
                <!-- Platform Section -->
                <div>
                    <h3 class="text-zinc-900 font-semibold text-base sm:text-lg mb-3 sm:mb-4">
                        {{ __('Platform') }}
                    </h3>
                    <ul class="space-y-2 sm:space-y-2.5">
                        <li>
                            <a href="{{ route('services') }}" wire:navigate
                                class="text-zinc-700 hover:text-zinc-900 transition-colors text-sm sm:text-base">
                                {{ __('Services') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('gallery') }}" wire:navigate
                                class="text-zinc-700 hover:text-zinc-900 transition-colors text-sm sm:text-base">
                                {{ __('Gallery') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('terms') }}" wire:navigate
                                class="text-zinc-700 hover:text-zinc-900 transition-colors text-sm sm:text-base">
                                {{ __('Terms') }}
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Company Section -->
                <div>
                    <h3 class="text-zinc-900 font-semibold text-base sm:text-lg mb-3 sm:mb-4">
                        {{ __('Company') }}
                    </h3>
                    <ul class="space-y-2 sm:space-y-2.5">
                        <li>
                            <a href="{{ route('about') }}" wire:navigate
                                class="text-zinc-700 hover:text-zinc-900 transition-colors text-sm sm:text-base">
                                {{ __('About Us') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('faq') }}" wire:navigate
                                class="text-zinc-700 hover:text-zinc-900 transition-colors text-sm sm:text-base">
                                {{ __('FAQS') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact-us') }}" wire:navigate
                                class="text-zinc-700 hover:text-zinc-900 transition-colors text-sm sm:text-base">
                                {{ __('Contact') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="bg-black py-4 sm:py-5">
        <div class="container px-4">
            <p class="text-center text-white text-xs sm:text-sm md:text-base">
                © 2025 ebsixone. {{ __('All rights reserved.') }}
            </p>
        </div>
    </div>
</footer>
