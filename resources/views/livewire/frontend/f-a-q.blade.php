<div>
    <section
        class="rounded-3xl relative bg-black text-white min-h-[50vh] overflow-hidden container flex items-center justify-start">
        <!-- Background Pattern Overlay -->
        <div class="absolute inset-0 opacity-80 pointer-events-none">
            <img src="{{ asset('assets/images/home_page/background_images.png') }}" alt=""
                class="w-full h-full object-none" />
        </div>

        <!-- Hero Content -->
        <main class="releative z-10 w-full md:w-1/2 md:px-8 mt-20 py-4">
            <div class="flex flex-col space-y-8">
                {{-- line height text --}}
                <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-wrap text-white leading-tight">Freequently
                    Asked Questions</h1>
            </div>
        </main>
    </section>

    <section class="py-12">
        <div class="max-w-6xl mx-auto px-6" x-data="{ open: 1 }">
            <div class="space-y-4">
                <!-- Question 1 -->
                <div :class="open === 1 ? 'bg-second-500' : 'bg-light-blue'" class="p-6 rounded-2xl shadow-lg">
                    <button @click="open === 1 ? open = null : open = 1"
                        class="w-full text-left font-semibold flex items-center justify-between focus:outline-none">
                        <span :class="open === 1 ? 'text-white' : ''">1. What is Business Process
                            Management (BPM)?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path :class="open === 1 ? 'rotate-180 text-white' : ''" d="M6 9l6 6 6-6">
                            </path>
                        </svg>
                    </button>
                    <div x-show="open === 1" x-transition class="mt-4 text-white text-sm">
                        Business Process Management (BPM) is a systematic approach to designing, analyzing, optimizing,
                        and automating business processes to improve efficiency, transparency, and performance across an
                        organization.
                    </div>
                </div>

                <!-- Question 2 -->
                <div :class="open === 2 ? 'bg-second-500' : 'bg-light-blue'" class="p-6 rounded-2xl shadow-lg">
                    <button @click="open === 2 ? open = null : open = 2"
                        class="w-full text-left font-semibold flex items-center justify-between focus:outline-none">
                        <span :class="open === 2 ? 'text-white' : ''">2. How does ebSixOne BPM help my
                            business?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path :class="open === 2 ? 'rotate-180 text-white' : ''" d="M6 9l6 6 6-6">
                            </path>
                        </svg>
                    </button>
                    <div x-show="open === 2" x-transition class="mt-4 text-white text-sm">
                        ebSixOne BPM helps streamline and automate your business processes, enhancing efficiency,
                        reducing errors, and enabling better decision-making.
                    </div>
                </div>

                <!-- Question 3 -->
                <div :class="open === 3 ? 'bg-second-500' : 'bg-light-blue'" class="p-6 rounded-2xl shadow-lg">
                    <button @click="open === 3 ? open = null : open = 3"
                        class="w-full text-left font-semibold flex items-center justify-between focus:outline-none">
                        <span :class="open === 3 ? 'text-white' : ''">3. Is ebSixOne BPM suitable for
                            small and medium enterprises (SMEs)?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path :class="open === 3 ? 'rotate-180 text-white' : ''" d="M6 9l6 6 6-6">
                            </path>
                        </svg>
                    </button>
                    <div x-show="open === 3" x-transition class="mt-4 text-white text-sm">
                        Yes, ebSixOne BPM is designed to be scalable and flexible, making it a great fit for both small
                        and medium enterprises looking to optimize their operations.
                    </div>
                </div>

                <!-- Question 4 -->
                <div :class="open === 4 ? 'bg-second-500' : 'bg-light-blue'" class="p-6 rounded-2xl shadow-lg">
                    <button @click="open === 4 ? open = null : open = 4"
                        class="w-full text-left font-semibold flex items-center justify-between focus:outline-none">
                        <span :class="open === 4 ? 'text-white' : ''">4. What types of processes can be
                            managed with ebSixOne BPM?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path :class="open === 4 ? 'rotate-180 text-white' : ''" d="M6 9l6 6 6-6">
                            </path>
                        </svg>
                    </button>
                    <div x-show="open === 4" x-transition class="mt-4 text-white text-sm">
                        You can manage a wide range of processes, including customer service, sales, HR, finance, and
                        supply chain management.
                    </div>
                </div>

                <!-- Question 5 -->
                <div :class="open === 5 ? 'bg-second-500' : 'bg-light-blue'" class="p-6 rounded-2xl shadow-lg">
                    <button @click="open === 5 ? open = null : open = 5"
                        class="w-full text-left font-semibold flex items-center justify-between focus:outline-none">
                        <span :class="open === 5 ? 'text-white' : ''">5. Does ebSixOne BPM support modern
                            technologies?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path :class="open === 5 ? 'rotate-180 text-white' : ''" d="M6 9l6 6 6-6">
                            </path>
                        </svg>
                    </button>
                    <div x-show="open === 5" x-transition class="mt-4 text-white text-sm">
                        Yes, ebSixOne BPM integrates with modern technologies such as cloud-based solutions, artificial
                        intelligence, and data analytics tools.
                    </div>
                </div>

                <!-- Question 6 -->
                <div :class="open === 6 ? 'bg-second-500' : 'bg-light-blue'" class="p-6 rounded-2xl shadow-lg">
                    <button @click="open === 6 ? open = null : open = 6"
                        class="w-full text-left font-semibold flex items-center justify-between focus:outline-none">
                        <span :class="open === 6 ? 'text-white' : ''">6. How can I get started with
                            ebSixOne BPM?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path :class="open === 6 ? 'rotate-180 text-white' : ''" d="M6 9l6 6 6-6">
                            </path>
                        </svg>
                    </button>
                    <div x-show="open === 6" x-transition class="mt-4 text-white text-sm">
                        To get started, you can contact our sales team or sign up for a demo to see how ebSixOne BPM can
                        be tailored to your business needs.
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="my-20 space-y-12">
        <div
            class="container bg-gradient-to-r from-second-500 to-zinc-900 rounded-3xl p-12 text-center shadow-2xl border-4 border-zinc-100">
            <img src="{{ asset('assets/images/home_page/logo.png') }}" alt=""
                class="mx-auto w-full max-w-xs">
            <h2 class="text-white text-56px font-bold mb-4">Ready to Get Started?</h2>
            <p class="text-white text-lg font-bold max-w-2xl mx-auto">Business Process Management (BPM) software that
                can capture the organisational "Value Chain," which is the Business "DNA."</p>
        </div>
    </section>
</div>
