<div>
    <section
        class="rounded-3xl relative bg-black text-white min-h-[50vh] overflow-hidden container flex items-center justify-start">
        <!-- Background Pattern Overlay -->
        <div class="absolute inset-0 opacity-100 pointer-events-none scroll-animate-x">
            <img src="{{ asset('assets/images/home_page/Union (1).png') }}" alt=""
                class="w-full h-full object-cover" />
        </div>

        <!-- Hero Content -->
        <main class="releative z-10 w-full md:w-1/2 md:px-8 mt-20 py-4">
            <div class="flex flex-col space-y-8 scroll-animate-x-reverse">
                {{-- line height text --}}
                <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-wrap text-white leading-tight">Freequently Asked Questions</h1>
            </div>
        </main>
    </section>

    <section class="pt-20">
        <div class="max-w-6xl mx-auto px-6" x-data="{ open: 1 }">
            <div class="space-y-4">
                @forelse ($faqs as $faq)
                    <div :class="open === {{ $loop->iteration }} ? 'bg-second-500' : 'bg-light-blue'"
                        class="p-6 rounded-2xl shadow-lg scroll-animate-y">
                        <button @click="open === {{ $loop->iteration }} ? open = null : open = {{ $loop->iteration }}"
                            class="w-full text-left font-semibold flex items-center justify-between focus:outline-none">
                            <span :class="open === {{ $loop->iteration }} ? 'text-white' : ''">{{ $loop->iteration }}.
                                {{ $faq->question }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path :class="open === {{ $loop->iteration }} ? 'rotate-180 text-white' : ''"
                                    d="M6 9l6 6 6-6">
                                </path>
                            </svg>
                        </button>
                        <div x-show="open === {{ $loop->iteration }}" x-transition class="mt-4 text-white text-sm">
                            {{ $faq->answer }}</div>
                    </div>
                @empty
                    <p class="text-center text-gray-500">No FAQs available at the moment.</p>
                @endforelse
            </div>
        </div>
    </section>

    <section class="my-12">
        <div
            class="container bg-gradient-to-r from-second-500 to-zinc-900 rounded-3xl p-12 text-center shadow-xl border-4 border-zinc-100 hover:shadow-2xl duration-300">
            <img src="{{ asset('assets/images/home_page/logo.png') }}" alt=""
                class="mx-auto w-full max-w-xs scroll-animate-y-reverse duration-1500!">
            <h2 class="text-white text-56px font-bold mb-4 scroll-animate-y-reverse">Ready to Get Started?</h2>
            <p class="text-white text-lg font-bold max-w-2xl mx-auto scroll-animate-y-reverse duration-700!">Business
                Process Management (BPM) software that
                can capture the organisational "Value Chain," which is the Business "DNA."</p>
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
