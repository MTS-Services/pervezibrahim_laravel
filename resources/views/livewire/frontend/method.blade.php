<div>
    <section
        class="rounded-3xl relative bg-black text-white min-h-[50vh] overflow-hidden container flex items-center justify-start">
        <!-- Background Pattern Overlay -->
        <div class="absolute inset-0 opacity-80 pointer-events-none">
            <img src="{{ asset('assets/images/home_page/background_images.png') }}" alt=""
                class="w-full h-full object-cover" />
        </div>

        <!-- Hero Content -->
        <main class="releative z-10 w-full md:w-1/2 md:px-8 mt-20 py-4">
            <div class="flex flex-col space-y-8">
                {{-- line height text --}}
                <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-wrap text-white leading-tight">ebSixOne
                    Systems <br> and Methods!</h1>
            </div>
        </main>
    </section>

    {{-- <section class="my-20">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-20 items-center">
                @foreach ($pdfs as $pdf)
                <div class="flex flex-col justify-between items-center gap-5  shadow-2xl rounded-xl pb-4 overflow-hidden">
                    <div class="w-full h-full">
                        <img src="{{ storage_url($pdf->cover_image) }}" alt="{{ $pdf->title }}"
                            class="w-full h-full">
                    </div>
                    <x-ui.button href="{{ route('method.reader', ['slug' => 2]) }}" variant="orange-tertiary"
                        class="w-auto! py-2!">
                        {{ __('Learn More') }}
                    </x-ui.button>
                </div>
                @endforeach
            </div>
        </div>
    </section> --}}
    <section class="my-20">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-20">
                @foreach ($pdfs as $pdf)
                    <div class="flex flex-col h-[550px]">

                        <div class="h-[450px] w-full">
                            <img src="{{ storage_url($pdf->cover_image) }}" alt="{{ $pdf->title }}"
                                class="w-full h-full">
                        </div>

                        <div class="flex justify-center mt-auto pb-4">
                            <x-ui.button href="{{ $pdf->action }}" variant="orange-tertiary" class="py-2! w-auto!">
                                {{ __('Learn More') }}
                            </x-ui.button>
                        </div>
                    </div>
                @endforeach
            </div>
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
