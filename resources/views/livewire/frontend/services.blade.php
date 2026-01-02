<div>
    <section class="rounded-3xl relative bg-black text-white min-h-[50vh] overflow-hidden container mx-auto">
        <!-- Background Pattern Overlay -->
        <div class="absolute inset-0 opacity-80 pointer-events-none">
            <img src="{{ asset('assets/images/home_page/background_images.png') }}" alt=""
                class="w-full h-full object-cover" />
        </div>

        <!-- Header / Navigation -->
        <header class="relative z-10 flex items-center justify-between px-6 lg:px-16 py-8">

        </header>

        <!-- Hero Content -->
        <main class="relative z-10 container mx-auto px-6 lg:px-16 mt-12 grid lg:grid-cols-2 gap-12 items-center">
            <!-- Right: Text Section -->
            <div class="flex flex-col mt-32">
                <h1 class="text-3xl space-8 font-bold text-wrap text-white">
                    ebSixOne Systems <br>
                    design!
                </h1>
            </div>
        </main>
    </section>
    <section class="pt-20">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach ($videos as $video)
                    <x-video-player :video="$video" />
                @endforeach
            </div>
            @if ($videos->isEmpty())
                <p class="text-center text-second-500 text-xl font-bold">No videos available at the moment.</p>
            @endif
        </div>
    </section>

    <section class="my-20 space-y-12">
        <div
            class="container bg-gradient-to-r from-second-500 to-zinc-900 rounded-3xl p-12 text-center shadow-2xl border-4 border-zinc-100">
            <img src="{{ asset('assets/images/home_page/logo.png') }}" alt="" class="mx-auto w-full max-w-xs">
            <h2 class="text-white text-56px font-bold mb-4">Ready to Get Started?</h2>
            <p class="text-white text-lg font-bold max-w-2xl mx-auto">Business Process Management (BPM) software that
                can capture the organisational "Value Chain," which is the Business "DNA."</p>
        </div>
    </section>
</div>
