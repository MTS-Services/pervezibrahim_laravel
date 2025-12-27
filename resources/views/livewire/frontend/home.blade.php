<div>
    <section class="rounded-3xl relative bg-black text-white min-h-[50vh] overflow-hidden ml-92 mr-92">
        <!-- Background Pattern Overlay -->
        <div class="absolute inset-0 opacity-40 pointer-events-none">
            <img src="{{ asset('assets/images/home_page/background_images.png') }}" alt=""
                class="w-full h-full object-none" />
        </div>

        <!-- Header / Navigation -->
        <header class="relative z-10 flex items-center justify-between px-6 lg:px-16 py-8">


        </header>

        <!-- Hero Content -->
        <main class="relative z-10 container mx-auto px-6 lg:px-16 mt-12 grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left: Video Player Section -->
            <div class="relative group w-[500px] h-full">
                <!-- Video Container -->
                <div class="relative overflow-hidden ">
                    <img src="{{ asset('assets/images/home_page/Rectangle 31.png') }}" alt="Business Team"
                        class="w-full h-full object-cover " style="object-position: 15% center;" />
                    <!-- Video Overlay Content -->
                </div>
            </div>

            <!-- Right: Text Section -->
            <div class="flex flex-col space-y-8 mt-52">
                <h1 class="text-2xl font-light text-wrap text-white">
                    Business Process Management System and Methods for the New Era of Technology
                </h1>

                <div>
                    <a href="#"
                        class="inline-block px-10 py-3 rounded-full border border-white/50 text-white font-medium hover:bg-white hover:text-black transition-all">
                        Learn More
                    </a>
                </div>
            </div>
        </main>
    </section>
</div>
