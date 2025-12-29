<div>
    <section class="rounded-3xl relative bg-black text-white min-h-[50vh] overflow-hidden container flex items-center justify-start">
        <!-- Background Pattern Overlay -->
        <div class="absolute inset-0 opacity-40 pointer-events-none">
            <img src="{{ asset('assets/images/home_page/background_images.png') }}" alt=""
                class="w-full h-full object-none" />
        </div>

        <!-- Hero Content -->
        <main class="releative z-10 w-full md:w-1/2 md:px-8 mt-20 py-4">
            <div class="flex flex-col space-y-8">
                <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-wrap text-white">Everything you do is a process!</h1>
                <p class="text-md md:text-lg lg:text-xl font-light text-wrap text-white">Whether you grow wheat, make Croissants, bake bread, drill for oil, produce chemicals, build jet planes, or make financial transactions in millions.</p>

                <div>
                    <a href="#"
                        class="inline-block px-8 py-3 rounded-full border border-white/50 text-white font-medium hover:bg-white hover:text-black transition-all">
                        Learn More
                    </a>
                </div>
            </div>
        </main>
    </section>
    <div class="container py-12">
        <!-- Industry Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-20 mb-8">
            <div class="relative">
                <div class="w-full h-full">
                    <img src="{{ asset('assets/images/about_page/image-1.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="absolute -right-14 top-1/2 transform -translate-y-1/2 text-2xl hidden md:block">
                    <img src="{{ asset('assets/images/about_page/arrow_shape_up_stack.png') }}" alt=""
                        class="w-6 h-6">
                </div>
            </div>
            <div class="relative">
                <div class="w-full h-full">
                    <img src="{{ asset('assets/images/about_page/image-2.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="absolute -right-14 top-1/2 transform -translate-y-1/2 text-2xl hidden lg:block">
                    <img src="{{ asset('assets/images/about_page/arrow_shape_up_stack.png') }}" alt=""
                        class="w-6 h-6">
                </div>
            </div>
            <div class="relative">
                <div class="w-full h-full">
                    <img src="{{ asset('assets/images/about_page/image-3.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="absolute -right-14 top-1/2 transform -translate-y-1/2 text-2xl hidden md:block lg:hidden">
                    <img src="{{ asset('assets/images/about_page/arrow_shape_up_stack.png') }}" alt=""
                        class="w-6 h-6">
                </div>
            </div>
            <div class="relative">
                <div class="w-full h-full">
                    <img src="{{ asset('assets/images/about_page/image-4.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="absolute -right-14 top-1/2 transform -translate-y-1/2 text-2xl hidden md:block">
                    <img src="{{ asset('assets/images/about_page/arrow_shape_up_stack.png') }}" alt=""
                        class="w-6 h-6">
                </div>
            </div>
            <div class="relative">
                <div class="w-full h-full">
                    <img src="{{ asset('assets/images/about_page/image-5.png') }}" alt="" class="w-full h-full object-cover">
                </div>
                <div class="absolute -right-14 top-1/2 transform -translate-y-1/2 text-2xl hidden md:block">
                    <img src="{{ asset('assets/images/about_page/arrow_shape_up_stack.png') }}" alt=""
                        class="w-6 h-6">
                </div>
            </div>
            <div class="relative">
                <div class="w-full h-full">
                    <img src="{{ asset('assets/images/about_page/image-6.png') }}" alt="" class="w-full h-full object-cover">
                </div>
            </div>
        </div>

        <!-- Learn More Button -->
        <div class="flex justify-center items-center gap-4 mb-12">
            <x-ui.button variant="orange-tertiary" class="w-auto! py-2!">
                {{ __('Learn More') }}
            </x-ui.button>
        </div>

        <!-- BPM System Section -->
        <div class="bg-white border-teal-400 rounded-3xl p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                <!-- Left Image -->
                <div class="flex justify-center items-center">
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
                <div class="flex justify-center items-center">
                    <img src="{{ asset('assets/images/about_page/Frame 2147226040.png') }}" alt="">
                </div>
            </div>
        </div>

        <!-- CTA Banner -->
        <div
            class="bg-gradient-to-r from-second-500 to-zinc-900 rounded-3xl p-12 text-center shadow-2xl border-4 border-zinc-100">
            <img src="{{ asset('assets/images/home_page/logo.png') }}" alt="" class="mx-auto w-full max-w-xs">
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
