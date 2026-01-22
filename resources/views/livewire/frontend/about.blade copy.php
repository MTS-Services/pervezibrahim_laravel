<div>
    <section
        class="rounded-3xl relative bg-black/80 text-white min-h-[50vh] overflow-hidden container px-6 flex items-center justify-start">
        <!-- Background Pattern Overlay -->
        <div class="absolute inset-0 opacity-40 pointer-events-none">
            <img src="{{ asset('assets/images/home_page/Union.png') }}" alt="" class="w-full h-full object-none" />
        </div>

        <!-- Hero Content -->
        <main class="releative z-10 w-full mt-20 py-12">
            <div class="flex justify-center items-center">
                <img src="{{ asset('assets/images/about_page/hero/image1.png') }}" alt="" class="w-full h-full max-h-[300px] scroll-animate-x-reverse" />
                <img src="{{ asset('assets/images/about_page/hero/image2.png') }}" alt="" class="w-full h-full max-h-[300px] scroll-animate-y-reverse" />
                <img src="{{ asset('assets/images/about_page/hero/image3.png') }}" alt="" class="w-full h-full max-h-[300px] scroll-animate-x" />
            </div>
        </main>
    </section>

    <div class=" flex items-center justify-center  p-12 container">
        <h1 class="text-4xl  font-bold text-blue-900 text-center max-w-5xl leading-tight scroll-animate-y-reverse">
            We are entering a new era of technology; what we do today may not exist tomorrow!
        </h1>
    </div>


    <section class="bg-light-blue rounded-xl container p-8 hover:shadow-2xl duration-300">
        <div class="#">
            <!-- Grid Container -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                <div class="scroll-animate-x-reverse">
                    <x-video-player :thumbnail="$aboutVideos->thumbnail_one" :file="$aboutVideos->file_one" />
                </div>
                <div class="scroll-animate-x">
                    <x-video-player :thumbnail="$aboutVideos->thumbnail_two" :file="$aboutVideos->file_two" />
                </div>
            </div>

            <!-- Text Content -->
            <div class=" bg-opacity-60 backdrop-blur-sm  p-8 text-center scroll-animate-y">
                <p class="text-gray-800 text-lg md:text-xl leading-relaxed font-medium">{{ $aboutVideos->description }}
                </p>
            </div>
        </div>
    </section>


    <section class=" rounded-xl container px-1 mt-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 ">
            @foreach ($galleryVideos as $about_video)
                <div class="bg-light-blue rounded-2xl relative overflow-hidden gap-2 p-6 hover:shadow-2xl duration-300">
                    <div class="scroll-animate-y-reverse">
                        <x-video-player :thumbnail="$about_video->thumbnail" :file="$about_video->file" />
                    </div>

                    <!-- Text Content -->
                    <div class="bg-opacity-60 backdrop-blur-sm p-6 text-wrap {{ $loop->odd ? 'scroll-animate-x-reverse' : 'scroll-animate-x' }}">
                        <p class="text-gray-800 text-lg md:text-xl leading-relaxed font-medium">
                            <span class="font-bold">{{ $about_video->title }}</span>{{ $about_video->description }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    <section class="container py-12">
        <!-- BPM System Section -->
        <div class="bg-light-blue border-teal-400 rounded-3xl mt-4 mb-12 py-6 hover:shadow-2xl duration-300">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                <!-- Left Image -->
                <div class="flex justify-center items-center scroll-animate-x-reverse">
                    <img src="{{ asset('assets/images/about_page/Vector 3.png') }}" alt="">
                </div>

                <!-- Center Content -->
                <div class="text-center">
                    <h2 class="text-3xl md:text-4xl font-bold text-second-500 mb-4 leading-tight scroll-animate-y-reverse duration-1200!">
                        Business Process<br />Management (BPM)<br />System
                    </h2>
                    <p class="text-gray-700 text-wrap leading-relaxed scroll-animate-y-reverse">
                        It serves as the heartbeat of every enterprise, tailored to meet your current needs, and
                        designed with nature's principles in mind. A BPM system is designed with nature's principles in
                        mind, supporting your BPM requirements in today's rapidly changing technological landscape.
                    </p>
                </div>

                <!-- Right Image -->
                <div class="flex justify-center items-center scroll-animate-x">
                    <img src="{{ asset('assets/images/about_page/Frame 2147226040.png') }}" alt="">
                </div>
            </div>
        </div>



        <!-- CTA Banner -->
        <div
            class="bg-gradient-to-r from-second-500 to-zinc-900 rounded-3xl p-12 text-center shadow-xl border-4 border-zinc-100 hover:shadow-2xl duration-300">
            <img src="{{ asset('assets/images/home_page/logo.png') }}" alt="" class="mx-auto w-full max-w-xs scroll-animate-y-reverse duration-1500!">
            <h2 class="text-white text-3xl font-bold mb-4 scroll-animate-y-reverse">
                Ready to Get Started?
            </h2>
            <p class="text-zinc-100 text-lg max-w-2xl mx-auto scroll-animate-y-reverse duration-700!">
                Business Process Management (BPM) software that can capture the organisational "Value Chain," which is
                the Business "DNA."
            </p>
            <div class="mt-6 flex justify-center scroll-animate-y-reverse duration-500!">
                <x-ui.button variant="orange-tertiary" class="w-auto! py-2!">
                    {{ __('Get Started') }}
                </x-ui.button>
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
