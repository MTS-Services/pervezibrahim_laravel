<div>
    <section class="rounded-3xl relative bg-black text-white min-h-[50vh] overflow-hidden container mx-auto">
        <!-- Background Pattern Overlay -->
        <div class="absolute inset-0 opacity-100 pointer-events-none scroll-animate-x">
            <img src="{{ asset('assets/images/home_page/Union (1).png') }}" alt=""
                class="w-full h-full object-cover" />
        </div>
        <!-- Hero Content -->
        <main class="relative z-10 container mx-auto px-6 mt-12 grid grid-cols-1 gap-12 items-center">
            <!-- Right: Text Section -->
            <div class="flex flex-col mt-32">
                <h1 class="text-3xl font-bold text-wrap text-white scroll-animate-x-reverse">
                    Innovative<br> Solution
                </h1>
            </div>
        </main>
    </section>


    <section class="py-12">
        <div class="container">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 items-stretch">
                @foreach ($pdfs as $pdf)
                    <div class="bg-white rounded-lg flex flex-col p-4">
                        <div class="w-full h-[300px] overflow-hidden rounded-md scroll-animate-y">
                            <img src="{{ storage_url($pdf->cover_image) }}" alt="{{ $pdf->title }}"
                                class="w-full h-full">
                        </div>
                        <h3 class="text-lg font-medium text-second-500 mt-4 scroll-animate-y">
                            {{ $pdf->title }}
                        </h3>
                        <div class="mt-auto pt-4 scroll-animate-y">
                            <x-ui.button href="{{ $pdf->action }}" variant="orange-tertiary" class="w-auto! py-2!">
                                {{ __('Learn More') }}
                            </x-ui.button>
                        </div>

                    </div>
                @endforeach
            </div>

            <div class="mt-16 flex flex-col lg:flex-row justify-center items-center gap-12 lg:gap-20">
                @foreach ($featuredPdfs as $featuredPdf)
                    <div class="w-full lg:w-1/2 flex flex-col items-center">
                        <div class="w-full max-h-[38rem] overflow-hidden rounded-lg {{ $loop->odd ? 'scroll-animate-x-reverse' : 'scroll-animate-x' }}">
                            <img src="{{ storage_url($featuredPdf->cover_image) }}" alt="{{ $featuredPdf->title }}"
                                class="w-full max-h-[38rem] object-cover" loading="lazy">
                        </div>

                        <x-ui.button href="{{ $featuredPdf->action }}" variant="orange-tertiary"
                            class="w-auto! py-2! mt-4 {{ $loop->odd ? 'scroll-animate-x-reverse' : 'scroll-animate-x' }} duration-700!">
                            {{ __('Learn More') }}
                        </x-ui.button>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-16">

                <!-- Left Content -->
                <div class="w-full lg:w-1/2 scroll-animate-x-reverse">
                    <h2 class="text-4xl lg:text-5xl font-bold text-second-500 leading-tight">
                        Download a free <br>
                        copy of our <br>
                        enforcement of <br>
                        writs of control here
                    </h2>
                </div>

                <!-- Right Form Card -->
                <div class="w-full lg:w-1/2">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-900 rounded-2xl p-8 shadow-xl scroll-animate-x">
                        <form wire:submit="submit" class="space-y-4">

                            <input type="text" placeholder="First Name" wire:model="form.name"
                                class="w-full px-4 py-3 rounded-md outline-none text-gray-700 bg-white">

                            <input type="text" placeholder="Organization" wire:model="form.organization"
                                class="w-full px-4 py-3 rounded-md outline-none text-gray-700 bg-white">

                            <input type="email" placeholder="Your Email" wire:model="form.email"
                                class="w-full px-4 py-3 rounded-md outline-none text-gray-700 bg-white">

                            <label class="flex items-center gap-2 text-white text-sm">
                                <input type="checkbox" wire:model="form.is_receive_email" class="accent-white bg-white">
                                <span class="text-white">I am interested to receive updates</span>
                            </label>

                            <x-ui.button class="w-auto! py-2!" type="submit">
                                <span wire:loading.remove wire:target="save"
                                    class="text-text-btn-primary group-hover:text-text-btn-secondary">{{ __('Create') }}</span>
                                <span wire:loading wire:target="save"
                                    class="text-text-btn-primary group-hover:text-text-btn-secondary">{{ __('Creating...') }}</span>
                            </x-ui.button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <div
            class="container bg-gradient-to-r from-second-500 to-zinc-900 rounded-3xl p-12 text-center shadow-xl border-4 border-zinc-100 hover:shadow-2xl duration-300">
            <img src="{{ asset('assets/images/home_page/logo.png') }}" alt="" class="mx-auto w-full max-w-xs scroll-animate-y-reverse duration-1500!">
            <h2 class="text-white text-56px font-bold mb-4 scroll-animate-y-reverse">Ready to Get Started?</h2>
            <p class="text-white text-lg font-bold max-w-2xl mx-auto scroll-animate-y-reverse duration-700!">Business Process Management (BPM) software that
                can capture the organisational "Value Chain," which is the Business "DNA."</p>
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
