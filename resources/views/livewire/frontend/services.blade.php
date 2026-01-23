<div>
    <section class="rounded-xl relative bg-white shadow-2xl text-white min-h-[50vh] overflow-hidden container mx-auto">
        <!-- Background Pattern Overlay -->
        <!-- Hero Content -->
        <main class="releative z-10 w-full mt-20 py-12">
            <div class="flex justify-center items-center">
                <div class="w-full h-full max-h-[300px] scroll-animate-x-reverse overflow-hidden">
                    <img src="{{ asset('assets/images/about_page/hero/A person writing on a glass board AI-generated content may be incorrect_.png') }}"
                        alt=""
                        class="w-full h-full max-h-[300px] transition-transform duration-300 ease-in hover:scale-105 hover:shadow-2xl" />
                </div>
                <div class="w-full h-full max-h-[300px] scroll-animate-y-reverse overflow-hidden">
                    <img src="{{ asset('assets/images/about_page/hero/A brick wall with blue neon lights AI-generated content may be incorrect_.png') }}"
                        alt=""
                        class="w-full h-full max-h-[300px] transition-transform duration-300 ease-in hover:scale-105 hover:shadow-2xl" />
                </div>
                <div class="w-full h-full max-h-[300px] scroll-animate-x overflow-hidden">
                    <img src="{{ asset('assets/images/about_page/hero/A robot with many icons AI-generated content may be incorrect_.jpg') }}"
                        alt=""
                        class="w-full h-full max-h-[300px] transition-transform duration-300 ease-in hover:scale-105 hover:shadow-2xl" />
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-1">
                <div class="text-center hover:shadow-2xl duration-500 ease-in scroll-animate-x-reverse">
                    <p
                        class="text-sm border-2 border-black/60 ease-in! hover:border-second-500 rounded-sm p-2 h-full">
                        Business Process
                        Management (BPM) is crucial for developing effective strategies
                        to assess and improve operational performance before the emergence of artificial intelligence.​​
                    </p>
                </div>
                <div class="text-center hover:shadow-2xl duration-500 ease-in scroll-animate-y-reverse">
                    <p
                        class="text-sm border-2 border-black/60 ease-in! hover:border-second-500 rounded-sm p-2 h-full">
                        Shaping your organisation’s destiny, inspiring creativity and proactive thinking
                        in those who encounter it.​</p>
                </div>
                <div class="text-center hover:shadow-2xl duration-500 ease-in scroll-animate-x">
                    <p
                        class="text-sm border-2 border-black/60 ease-in! hover:border-second-500 rounded-sm p-2 h-full">
                        A futuristic robot symbolises technology and industry, representing artificial
                        intelligence and
                        bridging the gap between the past and the future.​</p>
                </div>
            </div>

            <!-- Images Section -->
            <div class="flex flex-col lg:flex-row items-center justify-between gap-4 mt-4">

                <!-- ERP Image -->
                <div class="w-full max-w-80 flex-shrink-0 scroll-animate-x-reverse overflow-hidden rounded-2xl">
                    <img src="{{ asset('assets/images/services/image-4.png') }}" alt="ERP and Industry 4.0 Technologies"
                        class="w-full h-full object-cover transition-transform duration-300 ease-in hover:scale-105 hover:shadow-2xl hover:z-50">
                </div>

                <!-- Arrow 1 -->
                {{-- <svg viewBox="0 0 116 116" fill="none"
                    class="scroll-animate-x-reverse duration-500! ease-out! w-20 h-20 fill-yellow-600"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19.3326 72.5L19.3326 43.5L57.9992 43.5L57.9992 20.1067L96.6659 58L57.9992 95.8934L57.9992 72.5L19.3326 72.5Z" />
                </svg> --}}

                <svg width="94" height="86" class="scroll-animate-x-reverse" viewBox="0 0 94 86"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 18 H50 V0 L94 43 L50 86 V68 H0 Z" fill="#F2BBAD" />
                </svg>


                <!-- ERP Image -->
                <div
                    class="w-full max-w-80 flex-shrink-0 scroll-animate-x-reverse duration-700! ease-in! overflow-hidden rounded-2xl">
                    <img src="{{ asset('assets/images/services/images5.png') }}" alt="ERP and Industry 4.0 Technologies"
                        class="w-full h-full object-cover  transition-transform duration-300 ease-in hover:scale-105 hover:shadow-2xl hover:z-50">
                </div>

                <!-- Arrow 1 -->
                <svg width="94" height="86" class="scroll-animate-x-reverse" viewBox="0 0 94 86"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 18 H50 V0 L94 43 L50 86 V68 H0 Z" fill="#F2BBAD" />
                </svg>


                <!-- Logistics Image -->
                <div
                    class="w-full max-w-80 flex-shrink-0 scroll-animate-x-reverse duration-700! ease-in overflow-hidden rounded-2xl">
                    <img src="{{ asset('assets/images/services/image-6.png') }}" alt="ERP and Industry 4.0 Technologies"
                        class="w-full h-full object-cover  transition-transform duration-300 ease-in hover:scale-105 hover:shadow-2xl hover:z-50">
                </div>

            </div>
            <div
                class="border-4 border-black/60 p-2 mt-4 text-center rounded-sm hover:shadow-2xl duration-300 hover:border-second-500 scroll-animate-y">
                <p class="text-sm"><strong>ebSixOne</strong> is developed from decades of experience exploring the
                    interconnected world
                    of Industry 4.0. This digital representation highlights key technologies such as IoT, AR, and data
                    security, showcasing a future
                    where innovation drives global industries. It also features SAP Business Process Automation software
                    and the concept of an ERP (Enterprise Resource Planning) system displayed on a virtual screen.
                    Additionally, there is a
                    wireframed robotic hand interacting with a digital graph interface, as well as an isometric
                    flowchart depicting automatic warehouse robots and continuous conveyor belts, complete with
                    manipulators and various logistics
                    item names connected by arrows. <strong>I have four brief videos that provide an overview of the
                        innovative BPM system. Let's collaborate and embrace this advancement together!</strong>​</p>
            </div>
        </main>

    </section>

    <section class=" rounded-xl container mt-8 px-0">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach ($videos as $video)
                <div class="bg-light-blue rounded-2xl relative overflow-hidden gap-2 p-6 hover:shadow-2xl {{ $loop->odd ? 'scroll-animate-x-reverse' : 'scroll-animate-x' }}">
                    <div>
                        <div class="">
                            <x-video-player :thumbnail="$video->thumbnail" :file="$video->file" />
                        </div>
                    </div>
                    <!-- Text Content -->
                    <div class="bg-opacity-60 backdrop-blur-sm p-6 text-wrap scroll-animate-y">
                        <p class="text-black text-lg md:text-xl leading-relaxed font-medium">
                            <span class="font-bold">{{ $video->title }}</span>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        @if ($videos->isEmpty())
            <p class="text-center text-second-500 text-xl font-bold">No videos available at the moment.</p>
        @endif
    </section>

    <div
        class="container bg-light-blue rounded-2xl border border-blue-100 shadow-sm mt-12 p-4 hover:shadow-2xl scroll-animate-y-reverse">

        <div class="flex flex-col md:flex-row gap-10">
            <div class="w-full h-full overflow-hidden flex items-center justify-center scroll-animate-x-reverse">
                <img src="{{ asset('assets/images/gallery/screenshots3.png') }}" alt="Supply Chain Management Diagram"
                    class="w-full h-[450px]! object-cover transform transition-transform scroll-animate-x-reverse hover:scale-105" />
            </div>
            <div class="w-full h-full overflow-hidden flex items-center justify-center scroll-animate-x">
                <img src="{{ asset('assets/images/gallery/screenshots.png') }}" alt="Supply Chain Management Diagram"
                    class="w-full h-[450px]! object-cover transform transition-transform scroll-animate-x-reverse hover:scale-105" />
            </div>
        </div>

        <div class="mt-4 text-center scroll-animate-y">
            <p
                class="text-gray-900 font-bold text-lg md:text-xl leading-relaxed border-4 p-2 border-black/60 rounded-sm hover:shadow-2xl  scroll-animate-y hover:border-second-500">
                The critical steps of the supply chain highlight the flow from suppliers to customers.
                To enhance efficiency and foster innovation, a value chain is essential to an enterprise.
            </p>
        </div>
    </div>

    <section class="my-20 space-y-12">
        <div
            class="container bg-gradient-to-r from-second-500 to-zinc-900 rounded-3xl p-12 text-center shadow-lg border-4 border-zinc-100 hover:shadow-2xl scroll-animate-y-reverse">
            <img src="{{ asset('assets/images/home_page/logo.png') }}" alt=""
                class="mx-auto w-full max-w-xs  scroll-animate-y-reverse duration-1500!">
            <h2 class="text-white text-56px font-bold mb-4 scroll-animate-y-reverse">Ready to Get Started?</h2>
            <p class="text-white text-lg font-bold max-w-2xl mx-auto scroll-animate-y-reverse">Business Process
                Management (BPM) software
                that
                can capture the organisational "Value Chain," which is the Business "DNA."</p>
        </div>
    </section>
</div>

@push('scripts')
<script>
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
        }, { threshold: 0.15 });

        elements.forEach(el => observer.observe(el));
    }

    // First load
    document.addEventListener('DOMContentLoaded', initScrollAnimations);

    // Livewire wire:navigate page change
    document.addEventListener('livewire:navigated', initScrollAnimations);
</script>
@endpush

