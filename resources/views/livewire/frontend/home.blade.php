<div>
    <section class="rounded-3xl relative bg-black text-white min-h-[50vh] overflow-hidden container mx-auto">
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
                <h1 class="text-1xl font-medium text-wrap text-white">
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

    <section
        class="flex flex-col md:flex-row items-center justify-between gap-8 p-8 bg-white max-w-7xl mx-auto font-sans">
        <!-- Left Side: Quote and Author -->
        <div class="flex flex-col items-start md:items-end">
            <h1 class="text-[#002855] text-3xl md:text-4xl font-extrabold tracking-tight leading-tight text-balance">
                What gets measured - <br class="hidden md:block" /> gets managed!
            </h1>
            <div
                class="mt-2 bg-[#2563EB] text-white text-xs md:text-sm font-semibold px-4 py-1.5 rounded-full inline-flex items-center">
                Peter Drucker
            </div>
        </div>

        <!-- Right Side: Logo Container -->
        <div
            class="bg-[#F3F4F6] rounded-full px-8 md:px-16 py-8 md:py-10 flex flex-wrap items-center justify-center gap-8 md:gap-12 flex-1 max-w-2xl">
            <!-- Logo 1 -->
            <div class="flex items-center gap-1">
                <div class="w-6 h-6 border-4 border-[#4B5563] rounded-sm opacity-80"></div>
                <span class="text-[#4B5563] font-black text-xl tracking-tighter opacity-80">LOGO</span>
            </div>

            <!-- Logo 2 -->
            <div class="flex items-center gap-1.5">
                <div class="w-5 h-5 bg-[#4B5563] rounded-full flex items-center justify-center opacity-80">
                    <div class="w-2 h-2 bg-[#F3F4F6] rounded-full"></div>
                </div>
                <span class="text-[#4B5563] font-bold text-lg opacity-80">Logoipsum</span>
            </div>

            <!-- Logo 3 -->
            <div class="text-[#4B5563] font-black text-2xl tracking-widest opacity-80">
                IPSUM
            </div>

            <!-- Logo 4 -->
            <div class="flex items-center gap-1 opacity-80">
                <div class="grid grid-cols-2 gap-0.5">
                    <div class="w-2 h-2 bg-[#4B5563]"></div>
                    <div class="w-2 h-2 bg-[#4B5563]"></div>
                    <div class="w-2 h-2 bg-[#4B5563]"></div>
                    <div class="w-2 h-2 border border-[#4B5563]"></div>
                </div>
                <span class="text-[#4B5563] font-bold text-xl tracking-tight">LOGO</span>
            </div>
        </div>
    </section>

</div>
