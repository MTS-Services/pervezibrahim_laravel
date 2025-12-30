<div>
    <section
        class="rounded-3xl relative bg-black text-white min-h-[50vh] overflow-hidden container flex items-center justify-start">
        <!-- Background Pattern Overlay -->
        <div class="absolute inset-0 opacity-80 pointer-events-none">
            <img src="{{ asset('assets/images/home_page/background_images.png') }}" alt=""
                class="w-full h-full object-none" />
        </div>

        <!-- Hero Content -->
        <main class="releative z-10 w-full md:w-1/2 md:px-8 mt-20 py-4">
            <div class="flex flex-col space-y-8">
                {{-- line height text --}}
                <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-wrap text-white leading-tight">Innovative <br>
                    Solution</h1>
            </div>
        </main>
    </section>

    <section class="py-12">
        <div class="container">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg">
                    <img src="{{ asset('assets/images/contact-us/Rectangle 39.png') }}" alt="Where Are We Today"
                        class="w-full object-cover rounded-md">
                    <h3 class="text-lg font-medium text-second-500 mt-4">Where Are We Today?</h3>
                    <x-ui.button variant="orange-tertiary" class="w-auto! py-2! mt-4">
                        {{ __('Learn More') }}
                    </x-ui.button>
                </div>
                <div class="bg-white rounded-lg">
                    <img src="{{ asset('assets/images/contact-us/Rectangle 39 (1).png') }}" alt="Where Are We Today"
                        class="w-full object-cover rounded-md">
                    <h3 class="text-lg font-medium text-second-500 mt-4">Where Are We Today?</h3>
                    <x-ui.button variant="orange-tertiary" class="w-auto! py-2! mt-4">
                        {{ __('Learn More') }}
                    </x-ui.button>
                </div>
                <div class="bg-white rounded-lg">
                    <img src="{{ asset('assets/images/contact-us/Rectangle 39 (3).png') }}" alt="Where Are We Today"
                        class="w-full object-cover rounded-md">
                    <h3 class="text-lg font-medium text-second-500 mt-4">Where Are We Today?</h3>
                    <x-ui.button variant="orange-tertiary" class="w-auto! py-2! mt-4">
                        {{ __('Learn More') }}
                    </x-ui.button>
                </div>
                <div class="bg-white rounded-lg">
                    <img src="{{ asset('assets/images/contact-us/Rectangle 39 (3).png') }}" alt="Where Are We Today"
                        class="w-full object-cover rounded-md">
                    <h3 class="text-lg font-medium text-second-500 mt-4">Where Are We Today?</h3>
                    <x-ui.button variant="orange-tertiary" class="w-auto! py-2! mt-4">
                        {{ __('Learn More') }}
                    </x-ui.button>
                </div>
                <div class="bg-white rounded-lg">
                    <img src="{{ asset('assets/images/contact-us/Rectangle 39 (4).png') }}" alt="Where Are We Today"
                        class="w-full object-cover rounded-md">
                    <h3 class="text-lg font-medium text-second-500 mt-4">Where Are We Today?</h3>
                    <x-ui.button variant="orange-tertiary" class="w-auto! py-2! mt-4">
                        {{ __('Learn More') }}
                    </x-ui.button>
                </div>
                <div class="bg-white rounded-lg">
                    <img src="{{ asset('assets/images/contact-us/Rectangle 39 (5).png') }}" alt="Where Are We Today"
                        class="w-full object-cover rounded-md">
                    <h3 class="text-lg font-medium text-second-500 mt-4">Where Are We Today?</h3>
                    <x-ui.button variant="orange-tertiary" class="w-auto! py-2! mt-4">
                        {{ __('Learn More') }}
                    </x-ui.button>
                </div>
            </div>

            <div class="mt-16 flex flex-col lg:flex-row justify-center items-center gap-12 lg:gap-20">
                <div class="w-full lg:w-1/2 flex flex-col items-center">
                    <div class="w-full max-h-[35rem] overflow-hidden rounded-lg">
                        <img src="{{ asset('assets/images/contact-us/1.png') }}" alt="Contact us illustration"
                            class="w-full h-[35rem] object-cover" loading="lazy">
                    </div>

                    <x-ui.button variant="orange-tertiary" class="!w-auto !py-2 mt-4">
                        {{ __('Learn More') }}
                    </x-ui.button>
                </div>

                <div class="w-full lg:w-1/2 flex flex-col items-center">
                    <div class="w-full max-h-[35rem] overflow-hidden rounded-lg">
                        <img src="{{ asset('assets/images/contact-us/3.png') }}" alt="Customer support illustration"
                            class="w-full h-[35rem] object-cover" loading="lazy">
                    </div>

                    <x-ui.button variant="orange-tertiary" class="!w-auto !py-2 mt-4">
                        {{ __('Learn More') }}
                    </x-ui.button>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-16">

                <!-- Left Content -->
                <div class="w-full lg:w-1/2">
                    <h2 class="text-4xl lg:text-5xl font-bold text-second-500 leading-tight">
                        Download a free <br>
                        copy of our <br>
                        enforcement of <br>
                        writs of control here
                    </h2>
                </div>

                <!-- Right Form Card -->
                <div class="w-full lg:w-1/2">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-900 rounded-2xl p-8 shadow-xl">
                        <form class="space-y-4">

                            <input type="text" placeholder="First Name"
                                class="w-full px-4 py-3 rounded-md outline-none text-gray-700 bg-white">

                            <input type="text" placeholder="Organisation"
                                class="w-full px-4 py-3 rounded-md outline-none text-gray-700 bg-white">

                            <input type="email" placeholder="Your Email"
                                class="w-full px-4 py-3 rounded-md outline-none text-gray-700 bg-white">

                            <label class="flex items-center gap-2 text-white text-sm">
                                <input type="checkbox" class="accent-white bg-white">
                                <span class="text-white">I am interested to receive updates</span>
                            </label>

                            <x-ui.button variant="orange-tertiary" class="!w-auto !py-2 mt-4">
                                {{ __('Send Us') }}
                            </x-ui.button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
