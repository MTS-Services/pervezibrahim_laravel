<div>
    <section class="rounded-3xl relative bg-black text-white min-h-[50vh] overflow-hidden container mx-auto">
        <!-- Background Pattern Overlay -->
        <div class="absolute inset-0 opacity-100 pointer-events-none">
            <img src="{{ asset('assets/images/home_page/Union (1).png') }}" alt=""
                class="w-full h-full object-cover" />


        </div>

        <!-- Hero Content -->
        <main class="relative z-10 container mx-auto px-6 lg:px-16 mt-12  gap-12 items-center">
            <!-- Right: Text Section -->
            <div class=" text-white">
                <!-- Main Content -->
                <main class=" mx-auto px-6 py-16">
                    <!-- Cards Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Card 1: Business Process Management -->
                        <div
                            class="border-2 border-Medium-gray rounded-2xl overflow-hidden bg-PrussianBlue from-blue-950  p-3">
                            <div
                                class="h-64 bg-gradient-to-b from-blue-400 flex items-center justify-center overflow-hidden">
                                <div class="text-center">
                                    <img src="{{ asset('assets/images/services/business.png') }}" alt="">
                                </div>
                            </div>
                            <div class="py-6">

                                <p class="text-gray-200 leading-relaxed font-medium">
                                    Business Process Management (BPM) is crucial for developing effective
                                    strategies to assess and improve operational performance before the
                                    emergence of artificial intelligence.
                                </p>
                            </div>
                        </div>

                        <!-- Card 2: Future Quote -->
                        <div
                            class="border-2 border-Medium-gray rounded-2xl overflow-hidden bg-PrussianBlue from-blue-950  p-3">
                            <div
                                class="h-64 bg-gradient-to-b from-blue-400   flex items-center justify-center overflow-hidden">
                                <div class="text-center">
                                    <img src="{{ asset('assets/images/services/image2.png') }}" alt="">
                                </div>
                            </div>
                            <div class="py-6">

                                <p class="text-gray-200 leading-relaxed font-medium">
                                    Shaping your organisation’s destiny, inspiring creativity and proactive
                                    thinking in those who encounter it.
                                </p>
                            </div>
                        </div>

                        <!-- Card 3: AI & Technology -->
                        <div
                            class="border-2 border-Medium-gray rounded-2xl overflow-hidden bg-PrussianBlue from-blue-950  p-3">
                            <div
                                class="h-64 bg-gradient-to-b from-blue-400   flex items-center justify-center overflow-hidden">
                                <div class="text-center">
                                    <img src="{{ asset('assets/images/services/image3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="py-6">

                                <p class="text-gray-200 leading-relaxed font-medium">
                                    A futuristic robot symbolises technology and industry, representing
                                    artificial intelligence and bridging the gap between the past and the
                                    future.
                                </p>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </main>

    </section>

    <div class="container mx-auto">
        <div class=" flex items-center justify-center p-8">
            <div class="w-full  rounded-3xl p-8 sm:p-10 lg:p-12 bg-light-blue">

                <!-- Images Section -->
                <div class="flex flex-col lg:flex-row items-center justify-center gap-4 sm:gap-6 mb-8 sm:mb-10">

                    <!-- ERP Image -->
                    <div class="w-full sm:w-72 flex-shrink-0">
                        <img src="{{ asset('assets/images/services/image-4.png') }}"
                            alt="ERP and Industry 4.0 Technologies" class="w-full object-cover h-48 sm:h-56">
                    </div>

                    <!-- Arrow 1 -->
                    <svg width="116" height="116" viewBox="0 0 116 116" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.3326 72.5L19.3326 43.5L57.9992 43.5L57.9992 20.1067L96.6659 58L57.9992 95.8934L57.9992 72.5L19.3326 72.5Z"
                            fill="#002060" />
                    </svg>


                    <!-- ERP Image -->
                    <div class="w-full sm:w-72 flex-shrink-0">
                        <img src="{{ asset('assets/images/services/images5.png') }}"
                            alt="ERP and Industry 4.0 Technologies" class="w-full object-cover h-48 sm:h-56">
                    </div>

                    <!-- Arrow 1 -->
                    <svg width="116" height="116" viewBox="0 0 116 116" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.3326 72.5L19.3326 43.5L57.9992 43.5L57.9992 20.1067L96.6659 58L57.9992 95.8934L57.9992 72.5L19.3326 72.5Z"
                            fill="#002060" />
                    </svg>

                    <!-- Logistics Image -->
                    <div class="w-full sm:w-72 flex-shrink-0">
                        <img src="{{ asset('assets/images/services/image-6.png') }}"
                            alt="ERP and Industry 4.0 Technologies" class="w-full object-cover h-48 sm:h-56">
                    </div>

                </div>

                <!-- Text Content -->
                <div class="text-center">
                    <p class="text-gray-900 text-base sm:text-lg leading-relaxed">
                        <span class="font-bold text-gray-900">ebSixOne</span>
                        is developed from decades of experience exploring the interconnected world of Industry 4.0. This
                        digital representation highlights key technologies such as IoT, AR, and data security,
                        showcasing a future where innovation drives global industries. It also features SAP Business
                        Process Automation software and the concept of an ERP (Enterprise Resource Planning) system
                        displayed on a virtual screen. Additionally, there is a wireframed robotic hand interacting with
                        a digital graph interface, as well as an isometric flowchart depicting automatic warehouse
                        robots and continuous conveyor belts, complete with manipulators and various logistics item
                        names connected by arrows.
                        <span class="font-bold text-gray-900">I have four brief videos that provide an overview of the
                            innovative BPM system. Let's collaborate and embrace this advancement together!</span>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <section class=" rounded-xl container mt-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 px-10">
            @foreach ($videos as $video)
                <div class="bg-light-blue rounded-2xl relative overflow-hidden gap-2 p-6">
                    <div>
                        <div>
                            <x-video-player :thumbnail="$video->thumbnail" :file="$video->file" />
                        </div>
                    </div>
                    <!-- Text Content -->
                    <div class="bg-opacity-60 backdrop-blur-sm p-6 text-wrap ">
                        <p class="text-black text-lg md:text-xl leading-relaxed font-medium">
                            <span class="font-bold">Keys symbolise business processes, teamwork, and strategic planning.
                            </span>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        @if ($videos->isEmpty())
            <p class="text-center text-second-500 text-xl font-bold">No videos available at the moment.</p>
        @endif
    </section>

    <div class="max-w-7xl mx-auto bg-light-blue rounded-2xl border border-blue-100 shadow-sm mt-12 p-4">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">

            <div class="  overflow-hidden flex items-center justify-center ">
                <img src="{{ asset('assets/images/gallery/screenshots3.png') }}" alt="Supply Chain Management Diagram"
                    class="w-full h-auto object-contain rounded-md" />
            </div>

            <div class="  overflow-hidden flex items-center justify-center p-3">
                <img src="{{ asset('assets/images/gallery/screenshots.png') }}" alt="Supply Chain Management Diagram"
                    class="w-full h-auto object-contain rounded-md" />
            </div>

        </div>

        <div class="mt-8 px-4 text-center">
            <p class="text-gray-900 font-bold text-lg md:text-xl leading-relaxed">
                The critical steps of the supply chain highlight the flow from suppliers to customers.
                To enhance efficiency and foster innovation, a value chain is essential to an enterprise.
            </p>
        </div>
    </div>

    <section class="my-20 space-y-12">
        <div
            class="container bg-gradient-to-r from-second-500 to-zinc-900 rounded-3xl p-12 text-center shadow-2xl border-4 border-zinc-100">
            <img src="{{ asset('assets/images/home_page/logo.png') }}" alt="" class="mx-auto w-full max-w-xs">
            <h2 class="text-white text-56px font-bold mb-4">Ready to Get Started?</h2>
            <p class="text-white text-lg font-bold max-w-2xl mx-auto">Business Process Management (BPM) software
                that
                can capture the organisational "Value Chain," which is the Business "DNA."</p>
        </div>
    </section>
</div>
