<div>
    <section class="rounded-3xl relative bg-black text-white min-h-[50vh] overflow-hidden container mx-auto">
        <!-- Background Pattern Overlay -->
        <div class="absolute inset-0 opacity-90 pointer-events-none scroll-animate-y-reverse">
            <img src="{{ asset('assets/images/home_page/Union (1).png') }}" alt=""
                class="w-full h-full object-cover" />
        </div>

        <!-- Hero Content -->
        <main
            class="relative z-10 container mx-auto px-6 lg:px-16 mt-28 grid lg:grid-cols-2 grid-cols-1 gap-8 lg:gap-12 items-center">
            <!-- Left: Video Player Section -->
            <div class="relative group w-full h-full scroll-animate-x-reverse">
                <!-- Video Container -->
                <div>
                    <x-video-player :thumbnail="$video->thumbnail" :file="$video->file" />
                </div>
            </div>

            <!-- Right: Text Section -->
            <div class="lg:mt-40 mb-5 lg:mb-0">
                <div class="flex flex-col space-y-8">
                    <h1 class="text-1xl font-medium text-wrap text-white scroll-animate-x">{{ $video->title }}</h1>

                    <div class="scroll-animate-x">
                        <a href="{{ $video->action }}"
                            class="inline-block px-8 py-3 rounded-full border border-white/50 text-white font-medium hover:bg-white hover:text-black transition-all">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <section
        class="flex flex-col lg:flex-row items-center justify-between gap-8 py-8 lg:px-8 bg-white container mx-auto font-sans">
        <!-- Left Side: Quote and Author -->
        <div class="flex items-center justify-center p-4 scroll-animate-x-reverse">
            <div class="flex flex-col items-start sm:items-end max-w-2xl w-full">
                <h1
                    class="text-PrussianBlue text-2xl sm:text-3xl md:text-4xl font-extrabold tracking-tight leading-tight text-balance">
                    What gets measured - <br class="hidden sm:block"> gets managed!
                </h1>
                <div
                    class="mt-3 sm:-mt-10 bg-PrimaryBlue text-white text-xs sm:text-sm font-semibold px-4 py-1.5 rounded-full inline-flex items-center">
                    Peter Drucker
                </div>
            </div>
        </div>



        <!-- Right Side: Logo Container -->
        <div x-data="logoScroller()" x-init="start()" @mouseenter="pause()" @mouseleave="resume()"
            class="overflow-hidden bg-LightGray rounded-full w-full lg:w-1/2">
            <div class="px-4 md:px-16 py-4 md:py-10
               flex items-center gap-12 w-max" x-ref="track"
                :style="`transform: translateX(-${position}px)`">

                <!-- DUPLICATE LOGOS (for seamless loop) -->
                <template x-for="i in 2">
                    <div class="flex items-center gap-12">

                        <!-- Logo 1 -->
                        <div class="flex items-center gap-1">
                            <div class="w-5 h-5 border-4 border-muted rounded-sm opacity-80"></div>
                            <span class="text-muted font-black text-xl tracking-tighter opacity-80">LOGO</span>
                        </div>

                        <!-- Logo 2 -->
                        <div class="flex items-center gap-1.5">
                            <div class="w-5 h-5 bg-SlateGray rounded-full flex items-center justify-center opacity-80">
                                <div class="w-2 h-2 bg-LightGray rounded-full"></div>
                            </div>
                            <span class="text-muted font-bold text-lg opacity-80">Logoipsum</span>
                        </div>

                        <!-- Logo 3 -->
                        <div class="text-muted font-black text-2xl tracking-widest opacity-80">
                            IPSUM
                        </div>

                        <!-- Logo 4 -->
                        <div class="flex items-center gap-1 opacity-80">
                            <div class="grid grid-cols-2 gap-0.5">
                                <div class="w-2 h-2 bg-SlateGray"></div>
                                <div class="w-2 h-2 bg-SlateGray"></div>
                                <div class="w-2 h-2 bg-SlateGray"></div>
                                <div class="w-2 h-2 border border-SlateGray"></div>
                            </div>
                            <span class="text-muted font-bold text-xl tracking-tight">LOGO</span>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </section>

    <section
        class="container bg-[linear-gradient(135deg,_#9BBBF4_0%,_#EAF1FF_45%,_#FFFFFF_100%)] rounded-2xl shadow-md mt-6 py-2 scroll-animate-y-reverse hover:shadow-2xl group">
        <div class="px-6 lg:px-16 py-8">
            <div class="flex flex-col lg:flex-row gap-12 justify-between items-center">
                <!-- Left Content -->
                <div class="w-full max-w-1/2">
                    <img src="{{ asset('assets/images/home_page/logo_black.png') }}" alt=""
                        class="w-72 scroll-animate-x-reverse">
                    <h1
                        class="text-3xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight scroll-animate-x-reverse">
                        Business Process
                        Management (BPM) for the New Era of Technology!
                    </h1>
                </div>

                <!-- Right Images -->
                <div class="order-first lg:order-last w-full max-w-96 mx-h-96">
                    <img src="{{ asset('assets/images/home_page/Group 17694.png') }}" alt=""
                        class="max-w-96 mx-h-96  transform transition-transform duration-300 group-hover:scale-110 scroll-animate-x5">
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section 1 -->
    <section class="py-8 lg:py-16 lg:px-8 relative">
        <div class="absolute inset-0 pointer-events-none">
            <img src="{{ asset('assets/images/home_page/Background pattern.png') }}" alt="Background mask"
                class="w-full h-full object-none" />
        </div>
        <div class="absolute right-0 bottom-0 w-1/3 h-full pointer-events-none hidden md:block scroll-animate-x">
            <img src="{{ asset('assets/images/home_page/_Background mask.png') }}" alt="Background pattern"
                class="w-full h-full" />
        </div>
        <div class="container mx-auto">
            <div class="flex flex-col lg:flex-row gap-12 justify-between items-center">
                <!-- Left Images -->
                <div class="w-full max-w-96 mx-h-96">
                    <img src="{{ asset('assets/images/home_page/Group 17693.png') }}" alt=""
                        class="max-w-96 mx-h-96 transform transition-transform duration-300 hover:scale-110 scroll-animate-x-reverse" />
                </div>

                <!-- Right Content -->
                <div class="w-full p-6 lg:p-12 rounded-3xl">
                    <h2 class="text-3xl md:text-3xl font-bold text-gray-900 mb-8 scroll-animate-y-reverse">
                        I'm excited to share some fantastic news that will truly inspire you.
                    </h2>
                    <p class="text-gray-700 text-lg leading-relaxed mb-8 scroll-animate-y-reverse">
                        After spending five decades in information technology, including SAP consulting, I have
                        witnessed the evolution of computers and the development of various software and systems. This
                        journey has taken us from traditional punched cards to desktops, web applications, mobile
                        devices, and now advances in AI, robots, augmented reality, and virtual reality. Today, we are
                        experiencing even further advancements in information technology.
                    </p>
                    <x-ui.button variant="orange-tertiary" class="w-auto! py-2!">
                        {{ __('Learn More') }}
                    </x-ui.button>
                </div>
            </div>
        </div>
        <div class="container mx-auto mt-8">
            <div class="flex flex-col lg:flex-row gap-12 items-center">
                <!-- Left Content -->
                <div class="w-full lg:w-[60%]">
                    <p class="text-gray-700 text-lg leading-relaxed mg:mb-6 scroll-animate-x-reverse">
                        For years, I have been passionate about developing a new approach to Business Process Management
                        (BPM) grounded in natural principles. This approach, called "Enterprise Basics" aims to
                        revolutionize how we understand and implement BPM. It strives to simplify and enhance BPM
                        design, ensuring that it is grounded in natural principles, logical, and efficient. I am eager
                        to hear your thoughts on this exciting innovation! The insights are the matter and equally
                        compelling. Let's embark on this thrilling journey together and explore the possibilities. For
                        more on this topic, please check out the next slide!
                    </p>
                </div>

                <!-- Right Content -->
                <div class="w-full lg:w-[40%] scroll-animate-y-reverse">
                    <h3 class="text-3xl md:text-3xl font-bold text-gray-900 md:mb-8">
                        Let's embark on this thrilling journey together and explore the possibilities! For more on this
                        story, check out the next slide!
                    </h3>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="bg-light-blue p-12 font-sans">
        <div class="container grid grid-cols-1 md:grid-cols-4 gap-6 items-center">

            <div class="flex flex-col items-center space-y-4">
                <div class="  rounded-lg overflow-hidden shadow-lg   w-full">
                    <div class="h-42 flex items-center justify-center text-center p-4 text-gray-900 text-xs font-bold uppercase tracking-wider bg-cover bg-center"
                        style="background-image:  url('{{ asset('assets/images/home_page/home1.jpg') }}')">
                    </div>
                </div>

                <div class="text-blue-900">
                    <svg class="  rounded-full rotate-90" width="80" height="80" viewBox="0 0 116 116"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.3326 72.5V43.5H58V20.1L96.7 58 58 95.9V72.5H19.3Z" class="fill-zinc-900"></path>
                    </svg>
                </div>

                <div class="bg-gray-900 rounded-lg overflow-hidden shadow-lg w-full">
                    <div class="h-42 flex items-center justify-center text-center p-4 text-gray-900 text-xs font-bold uppercase tracking-wider bg-cover bg-center"
                        style="background-image: url('{{ asset('assets/images/home_page/home2.png') }}')">
                    </div>
                </div>


                <div class="text-blue-900">
                    <svg class="  rounded-full rotate-90" width="80" height="80" viewBox="0 0 116 116"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.3326 72.5V43.5H58V20.1L96.7 58 58 95.9V72.5H19.3Z" class="fill-zinc-900"></path>
                    </svg>
                </div>


                <div class="  rounded-lg overflow-hidden shadow-lg w-full ">
                    <div class="h-42 flex items-center justify-center text-center p-4 text-gray-900 text-xs font-bold uppercase tracking-wider bg-cover bg-center"
                        style="background-image:  url('{{ asset('assets/images/home_page/home1.jpg') }}')">
                    </div>
                </div>
            </div>

            <div class="md:col-span-2 relative flex flex-col items-center w-full">
                <div class="w-full max-w-[550px] mx-auto">
                    <x-video-player :thumbnail="$video->footer_thumbnail" :file="$video->footer_file" :class="'xl:h-[450px]'" />
                </div>
            </div>

            <div class="flex flex-col items-center space-y-4">
                <div class="  rounded-lg overflow-hidden shadow-lg  w-full">
                    <div class="h-42 flex items-center justify-center text-center p-4 text-gray-900 text-xs font-bold uppercase tracking-wider bg-cover bg-center"
                        style="background-image:  url('{{ asset('assets/images/home_page/side2.png') }}')">
                    </div>
                </div>

                <div class="text-blue-900">
                    <svg class="  rounded-full rotate-90" width="80" height="80" viewBox="0 0 116 116"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.3326 72.5V43.5H58V20.1L96.7 58 58 95.9V72.5H19.3Z" class="fill-zinc-900"></path>
                    </svg>
                </div>

                <div class="bg-gray-900 rounded-lg overflow-hidden shadow-lg  w-full">
                    <div class="h-42 flex items-center justify-center text-center p-4 text-gray-900 text-xs font-bold uppercase tracking-wider bg-cover bg-center"
                        style="background-image: url('{{ asset('assets/images/home_page/side2.png') }}')">
                    </div>
                </div>


                <div class="text-blue-900">
                    <svg class="  rounded-full rotate-90" width="80" height="80" viewBox="0 0 116 116"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.3326 72.5V43.5H58V20.1L96.7 58 58 95.9V72.5H19.3Z" class="fill-zinc-900"></path>
                    </svg>
                </div>


                <div class="  rounded-lg overflow-hidden shadow-lg  w-full">
                    <div class="h-42 flex items-center justify-center text-center p-4 text-gray-900 text-xs font-bold uppercase tracking-wider bg-cover bg-center"
                        style="background-image:  url('{{ asset('assets/images/home_page/side2.png') }}')">
                    </div>
                </div>
            </div>

        </div>
    </section> --}}
</div>

@push('scripts')
    <script>
        /* ---------------- Alpine Logo Scroller ---------------- */
        document.addEventListener('alpine:init', () => {
            Alpine.data('logoScroller', () => ({
                position: 0,
                speed: 0.4,
                paused: false,
                width: 0,
                rafId: null,

                start() {
                    this.$nextTick(() => {
                        this.width = this.$refs.track.scrollWidth / 2;
                        this.loop();
                    });
                },

                loop() {
                    if (!this.paused) {
                        this.position += this.speed;
                        if (this.position >= this.width) {
                            this.position = 0;
                        }
                    }
                    this.rafId = requestAnimationFrame(() => this.loop());
                },

                pause() {
                    this.paused = true;
                },

                resume() {
                    this.paused = false;
                }
            }));
        });

        /* ---------------- Livewire wire:navigate FIX ---------------- */
        document.addEventListener('livewire:navigated', () => {
            document.querySelectorAll('[x-data="logoScroller"]').forEach(el => {
                Alpine.initTree(el);
            });
        });

        function initScrollAnimations() {
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
        }

        // First load
        document.addEventListener('DOMContentLoaded', initScrollAnimations);

        // Livewire wire:navigate page change
        document.addEventListener('livewire:navigated', initScrollAnimations);
    </script>
@endpush
