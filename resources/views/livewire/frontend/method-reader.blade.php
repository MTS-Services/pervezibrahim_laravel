<div class="bg-zinc-950">
    <section class="max-w-6xl mx-auto pt-28 pb-12">
        <div class="flex justify-center items-center relative scroll-animate-y-reverse">
            <span class="bg-second-600 p-2 rounded-full absolute top-50 -left-10 translate-y-50 hover:bg-second-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 stroke-white" viewBox="0 0 24 24" fill="none"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-arrow-left-icon lucide-arrow-left">
                    <path d="m12 19-7-7 7-7" />
                    <path d="M19 12H5" />
                </svg>
            </span>
            <span class="bg-second-600 p-2 rounded-full absolute top-50 -right-10 translate-y-50 hover:bg-second-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 stroke-white" viewBox="0 0 24 24" fill="none"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-arrow-right-icon lucide-arrow-right">
                    <path d="M5 12h14" />
                    <path d="m12 5 7 7-7 7" />
                </svg>
            </span>
            <div class="w-full max-h-[calc(100vh-200px)]">
                <img src="{{ asset('assets/images/methods/image 37.png') }}" alt=""
                    class="w-full h-full max-h-[calc(100vh-200px)] object-cover">
            </div>
        </div>
        <!-- Bottom Navigation Bar -->
        <div class="flex justify-center mt-4 scroll-animate-y-reverse">
            <div
                class="bg-second-700 flex gap-5 text-white/80 rounded-tr-md rounded-tl-md border-b border-second-300 overflow-hidden">
                <span class="text-white/80 text-sm p-4 bg-second-100/20">1/12</span>
                <button class="hover:text-white transition py-4 stroke-white/80"><svg class="w-5 h-5" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg></button>
                <button class="hover:text-white transition py-4 stroke-white/80"><svg class="w-5 h-5" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 5a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM14 5a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1V5zM4 15a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H5a1 1 0 01-1-1v-4zM14 15a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z">
                        </path>
                    </svg></button>
                <button class="hover:text-white transition py-4 stroke-white/80"><svg class="w-5 h-5" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg></button>
                <button class="hover:text-white transition py-4 stroke-white/80"><svg class="w-5 h-5" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg></button>
                <button class="hover:text-white transition py-4 stroke-white/80"><svg class="w-5 h-5" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4">
                        </path>
                    </svg></button>
                <button class="hover:text-white transition py-4 stroke-white/80"><svg class="w-5 h-5" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                        </path>
                    </svg></button>
                <button class="hover:text-white transition py-4 stroke-white/80 pr-4"><svg class="w-5 h-5"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z">
                        </path>
                    </svg></button>
            </div>
        </div>
    </section>
</div>
@push('scripts')
    <script>
        // Scroll animation
        const elements = document.querySelectorAll(
            '.scroll-animate, .scroll-animate-x, .scroll-animate-x-reverse, .scroll-animate-y, .scroll-animate-y-reverse'
        );

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15
        });

        elements.forEach(el => observer.observe(el));
    </script>
@endpush
