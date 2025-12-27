<div>
    <div class="max-w-6xl mx-auto px-4 py-12">
        <!-- Industry Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Row 1 -->
            <div class="relative">
                <div class="">
                    <img src="{{ asset('assets/images/about_page/Rectangle 32 (1).png') }}" alt="">
                </div>
                <div class="absolute right-0 top-1/2 transform -translate-y-1/2 text-2xl hidden md:block">
                    <img src="{{ asset('assets/images/about_page/arrow_shape_up_stack.png') }}" alt=""
                        class="w-6 h-6">
                </div>
            </div>
            <div class="relative">
                <div class="">
                    <img src="{{ asset('assets/images/about_page/Rectangle 32 (1).png') }}" alt="">
                </div>
                <div class="absolute right-0 top-1/2 transform -translate-y-1/2 text-2xl hidden md:block">
                    <img src="{{ asset('assets/images/about_page/arrow_shape_up_stack.png') }}" alt=""
                        class="w-6 h-6">
                </div>
            </div>
            <div class="relative">
                <div class="">
                    <img src="{{ asset('assets/images/about_page/Rectangle 32 (1).png') }}" alt="">
                </div>
            </div>
            <div class="relative">
                <div class="">
                    <img src="{{ asset('assets/images/about_page/Rectangle 32 (1).png') }}" alt="">
                </div>
                <div class="absolute right-0 top-1/2 transform -translate-y-1/2 text-2xl hidden md:block">
                    <img src="{{ asset('assets/images/about_page/arrow_shape_up_stack.png') }}" alt=""
                        class="w-6 h-6">
                </div>
            </div>
            <div class="relative">
                <div class="">
                    <img src="{{ asset('assets/images/about_page/Rectangle 32 (1).png') }}" alt="">
                </div>
                <div class="absolute right-0 top-1/2 transform -translate-y-1/2 text-2xl hidden md:block">
                    <img src="{{ asset('assets/images/about_page/arrow_shape_up_stack.png') }}" alt=""
                        class="w-6 h-6">
                </div>
            </div>
            <div class="relative">
                <div class="">
                    <img src="{{ asset('assets/images/about_page/Rectangle 32 (1).png') }}" alt="">
                </div>
            </div>
        </div>

        <!-- Learn More Button -->
        <div class="flex justify-center items-center gap-4 mb-12">
            {{-- <button
                class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-3 rounded-full font-semibold shadow-lg transition">
                Learn More
            </button> --}}
            <x-ui.button variant="orange-tertiary" class="w-auto! py-2!">
                {{ __('Learn More') }}
            </x-ui.button>
        </div>

        <!-- BPM System Section -->
        <div class="bg-white border-teal-400 rounded-3xl p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                <!-- Left Image -->
                <div class="">
                    <img src="{{ asset('assets/images/about_page/Vector 3.png') }}" alt="">
                </div>

                <!-- Center Content -->
                <div class="text-center">
                    <h2 class="text-3xl md:text-4xl font-bold text-second-500 mb-4 leading-tight">
                        Business Process<br />Management (BPM)<br />System
                    </h2>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        It serves as the heartbeat of every enterprise, tailored to meet your current needs, and
                        designed with nature's principles in mind. A BPM system is designed with nature's principles in
                        mind, supporting your BPM requirements in today's rapidly changing technological landscape.
                    </p>
                </div>

                <!-- Right Image -->
                <div class="">
                    <img src="{{ asset('assets/images/about_page/Frame 2147226040.png') }}" alt="">
                </div>
            </div>
        </div>

        <!-- CTA Banner -->
        <div class="bg-gradient-to-r from-second-500 to-zinc-900 rounded-3xl p-12 text-center shadow-2xl border-4 border-zinc-100">
            <h3 class="text-white text-4xl font-bold mb-2 inline-block">ebSixOne<sup class="text-sm text-white">TM</sup>
            </h3>
            <h2 class="text-white text-3xl font-bold mb-4">
                Ready to Get Started?
            </h2>
            <p class="text-zinc-100 text-lg max-w-2xl mx-auto">
                Business Process Management (BPM) software that can capture the organisational "Value Chain," which is
                the Business "DNA."
            </p>
            <div class="mt-6 flex justify-center">
                <x-ui.button variant="orange-tertiary" class="w-auto! py-2!">
                {{ __('Get Started') }}
            </x-ui.button>
            </div>
        </div>
    </div>
</div>
