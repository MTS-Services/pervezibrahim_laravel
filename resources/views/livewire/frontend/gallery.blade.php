<div>
    <section class="rounded-3xl relative bg-black text-white min-h-[50vh] overflow-hidden container mx-auto">
        <!-- Background Pattern Overlay -->
        <div class="absolute inset-0 opacity-100 pointer-events-none ">
            <img src="{{ asset('assets/images/gallery/Union (2).png') }}" alt=""
                class="w-full h-full object-cover " />
        </div>

        <!-- Header / Navigation -->
        <header class="relative z-10 flex items-center justify-between px-6 lg:px-16 py-8">


        </header>

        <!-- Hero Content -->
        <main class="relative z-10 container mx-auto px-6 lg:px-16 mt-12 grid lg:grid-cols-2 gap-12 items-center">
            <!-- Right: Text Section -->
            <div class="flex flex-col mt-32">
                <h1 class="text-3xl space-8 font-bold text-wrap text-white">
                    Discover how<br> ebSixOne works!

                </h1>
            </div>
        </main>
    </section>

    {{-- <section class="pt-20">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach ($videos as $video)
                    <x-video-player :thumbnail="$video->thumbnail" :file="$video->file" />
                @endforeach
            </div>
            @if ($videos->isEmpty())
                <p class="text-center text-second-500 text-xl font-bold">No videos available at the moment.</p>
            @endif
        </div>
    </section> --}}

    <div class="container w-6xl">
        <p class="text-center text-black text-xl font-medium text-wrap p-8">
            Showing the mechanics of ebSixOne™, an innovative technology BPM platform, highlighting its functionality
            and relevance in today's digital landscape. The hexagonal design symbolises interconnected processes,
            inviting users to explore further.
        </p>
    </div>

    <div class="container flex justify-center items-center font-sans">

        <div class="max-w-6xl w-full">

            <div class="relative max-w-7xl mx-auto px-4">

                <!-- Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-20 mb-12 auto-rows-fr">

                    <!-- Card 1 -->
                    <div
                        class="bg-blue-900 rounded-xl overflow-hidden shadow-xl
        flex flex-col border-4 border-white/20 p-1 m-6 h-full">

                        <img src="http://localhost:8000/assets/images/gallery/screenshots34.png" alt="Supply Chain"
                            class="w-full h-52 object-cover rounded">

                        <div class="py-3 text-white text-center text-sm leading-relaxed flex-grow">
                            Supply Chain Cycle, showcasing the interconnected roles of various players
                            from manufacturers to consumers!
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="bg-blue-900 rounded-xl overflow-hidden shadow-xl
        flex flex-col border-4 border-white/20 p-1 m-6 h-full">

                        <img src="http://localhost:8000/assets/images/gallery/inner.png" alt="Production Process"
                            class="w-full h-52 object-cover rounded">

                        <div class="py-3 text-white text-center text-sm leading-relaxed flex-grow">
                            The process of producing medical supplies involves research, testing,
                            manufacturing, packaging, boxing, and delivery.
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="bg-blue-900 rounded-xl overflow-hidden shadow-xl
        flex flex-col border-4 border-white/20 p-1 m-6 h-full">

                        <img src="http://localhost:8000/assets/images/gallery/alinements.jpg" alt="Collaboration"
                            class="w-full h-52 object-cover rounded">

                        <div class="py-3 text-white text-center text-sm leading-relaxed flex-grow">
                            Collaboration in business processes is a key factor for success.
                        </div>
                    </div>

                </div>

                <!-- Arrow: Card 1 → Card 2 -->
                <svg class="hidden md:block absolute top-1/2 left-[28%]
               -translate-y-1/2 p-2 m-2  rounded-full "
                    width="80" height="80" viewBox="0 0 116 116" fill="none"
                    xmlns="http://www.w3.org/2000/svg">

                    <path d="M19.3326 72.5V43.5H58V20.1L96.7 58 58 95.9V72.5H19.3Z" fill="#002060" />
                </svg>

                <!-- Arrow: Card 2 → Card 3 -->
                <svg class="hidden md:block absolute top-1/2 left-[63%]
               -translate-y-1/2 p-2 m-2  rounded-full"
                    width="80" height="80" viewBox="0 0 116 116" fill="none"
                    xmlns="http://www.w3.org/2000/svg">

                    <path d="M19.3326 72.5V43.5H58V20.1L96.7 58 58 95.9V72.5H19.3Z" fill="#002060" />
                </svg>

            </div>

            <div class="relative max-w-7xl mx-auto px-4">

                <!-- Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-20 mb-12 auto-rows-fr">

                    <!-- Card 1 -->
                    <div
                        class="bg-blue-900 rounded-xl overflow-hidden shadow-xl
        flex flex-col border-4 border-white/20 p-1 m-6 h-full">

                        <img src="http://localhost:8000/assets/images/gallery/plan.jpg" alt="Supply Chain"
                            class="w-full h-52 object-cover rounded">

                        <div class="py-3 text-white text-center text-sm leading-relaxed flex-grow">
                            Strategy concept
                            Business Improvement
                            Circle Plan: Develop,
                            integrate, deploy,
                            implement, evaluate!
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="bg-blue-900 rounded-xl overflow-hidden shadow-xl
        flex flex-col border-4 border-white/20 p-1 m-6 h-full">

                        <img src="http://localhost:8000/assets/images/gallery/database.png" alt="Production Process"
                            class="w-full h-52 object-cover rounded">

                        <div class="py-3 text-white text-center text-sm leading-relaxed flex-grow">
                            Key concepts such as
                            databases, cloud
                            computing, data
                            management,
                            programming, software
                            engineering, user
                            interfaces, and graphic
                            design.
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="bg-blue-900 rounded-xl overflow-hidden shadow-xl
        flex flex-col border-4 border-white/20 p-1 m-6 h-full">

                        <img src="http://localhost:8000/assets/images/gallery/process.png" alt="Collaboration"
                            class="w-full h-52 object-cover rounded">

                        <div class="py-3 text-white text-center text-sm leading-relaxed flex-grow">
                            A Process Owner
                            discussing data on the
                            computer screen and
                            comparing it with a bar
                            graph.
                        </div>
                    </div>

                </div>

                <!-- Arrow: Card 1 → Card 2 -->
                <svg class="hidden md:block absolute top-1/2 left-[28%]
               -translate-y-1/2 p-2 m-2  rounded-full "
                    width="80" height="80" viewBox="0 0 116 116" fill="none"
                    xmlns="http://www.w3.org/2000/svg">

                    <path d="M19.3326 72.5V43.5H58V20.1L96.7 58 58 95.9V72.5H19.3Z" fill="#002060"></path>
                </svg>

                <!-- Arrow: Card 2 → Card 3 -->
                <svg class="hidden md:block absolute top-1/2 left-[63%]
               -translate-y-1/2 p-2 m-2  rounded-full"
                    width="80" height="80" viewBox="0 0 116 116" fill="none"
                    xmlns="http://www.w3.org/2000/svg">

                    <path d="M19.3326 72.5V43.5H58V20.1L96.7 58 58 95.9V72.5H19.3Z" fill="#002060"></path>
                </svg>

            </div>

        </div>
    </div>


    <section class=" rounded-xl container px-1 mt-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 ">
            <div class="bg-light-blue rounded-2xl relative overflow-hidden gap-2 p-6">
                <div>
                    <div>
                        <img src="{{ asset('assets/images/gallery/screenshots37.png') }}" alt=""
                            class="w-full h-full object-cover rounded-md">
                    </div>

                    <div class="controls">
                        <div class="progress-bar mb-3">
                            <div class="progress-fill" :style="`width: ${progress}%`" style="width: 0%"></div>
                        </div>
                    </div>
                </div>

                <!-- Text Content -->
                <div class="bg-opacity-60 backdrop-blur-sm p-6 text-wrap ">
                    <p class="text-gray-800 text-lg md:text-xl leading-relaxed font-medium">
                        <span class="font-bold">Keys symbolise business
                            processes, teamwork,
                            and
                            strategic planning. </span>
                    </p>
                </div>
            </div>

            <div class="bg-light-blue rounded-2xl relative overflow-hidden gap-2 p-6">
                <div>
                    <div>
                        <img src="{{ asset('assets/images/gallery/screenshots38.png') }}" alt=""
                            class="w-full h-full object-cover rounded-md">
                    </div>

                    <div class="controls">
                        <div class="progress-bar mb-3">
                            <div class="progress-fill" :style="`width: ${progress}%`" style="width: 0%"></div>
                        </div>
                    </div>
                </div>

                <!-- Text Content -->
                <div class="bg-opacity-60 backdrop-blur-sm p-6 text-wrap ">
                    <p class="text-gray-800 text-lg md:text-xl leading-relaxed font-medium">
                        <span class="font-bold">The value chain is essential for optimising efficiency and driving
                            innovation. </span>
                    </p>
                </div>
            </div>

            <div class="bg-light-blue rounded-2xl relative overflow-hidden gap-2 p-6">
                <div>
                    <div>
                        <img src="{{ asset('assets/images/gallery/screenshots39.png') }}" alt=""
                            class="w-full h-full object-cover rounded-md">
                    </div>

                    <div class="controls">
                        <div class="progress-bar mb-3">
                            <div class="progress-fill" :style="`width: ${progress}%`" style="width: 0%"></div>
                        </div>
                    </div>
                </div>

                <!-- Text Content -->
                <div class="bg-opacity-60 backdrop-blur-sm p-6 text-wrap ">
                    <p class="text-gray-800 text-lg md:text-xl leading-relaxed font-medium">
                        <span class="font-bold">Crucial steps of the supply chain
                            process, emphasising the flow
                            from suppliers to customers</span>
                    </p>
                </div>
            </div>

            <div class="bg-light-blue rounded-2xl relative overflow-hidden gap-2 p-6">
                <div>
                    <div>
                        <img src="{{ asset('assets/images/gallery/screenshots40.png') }}" alt=""
                            class="w-full h-full object-cover rounded-md">
                    </div>

                    <div class="controls">
                        <div class="progress-bar mb-3">
                            <div class="progress-fill" :style="`width: ${progress}%`" style="width: 0%"></div>
                        </div>
                    </div>
                </div>

                <!-- Text Content -->
                <div class="bg-opacity-60 backdrop-blur-sm p-6 text-wrap ">
                    <p class="text-gray-800 text-lg md:text-xl leading-relaxed font-medium">
                        <span class="font-bold">Agricultural production Bread-
                            making set. Process of bread
                            baking in a factory.</span>
                    </p>
                </div>
            </div>

            <div class="bg-light-blue rounded-2xl relative overflow-hidden gap-2 p-6">
                <div>
                    <div>
                        <img src="{{ asset('assets/images/gallery/screenshots44.png') }}" alt=""
                            class="w-full h-full object-cover rounded-md">
                    </div>

                    <div class="controls">
                        <div class="progress-bar mb-3">
                            <div class="progress-fill" :style="`width: ${progress}%`" style="width: 0%"></div>
                        </div>
                    </div>
                </div>

                <!-- Text Content -->
                <div class="bg-opacity-60 backdrop-blur-sm p-6 text-wrap ">
                    <p class="text-gray-800 text-lg md:text-xl leading-relaxed font-medium">
                        <span class="font-bold">Business people on workflow</span>
                    </p>
                </div>
            </div>

            <div class="bg-light-blue rounded-2xl relative overflow-hidden gap-2 p-6">
                <div>
                    <div>
                        <img src="{{ asset('assets/images/gallery/screenshpts32.png') }}" alt=""
                            class="w-full h-full object-cover rounded-md">
                    </div>

                    <div class="controls">
                        <div class="progress-bar mb-3">
                            <div class="progress-fill" :style="`width: ${progress}%`" style="width: 0%"></div>
                        </div>
                    </div>
                </div>

                <!-- Text Content -->
                <div class="bg-opacity-60 backdrop-blur-sm p-6 text-wrap ">
                    <p class="text-gray-800 text-lg md:text-xl leading-relaxed font-medium">
                        <span class="font-bold">Creating a Value Stream</span>
                    </p>
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
