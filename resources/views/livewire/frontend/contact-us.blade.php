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
                    <img src="{{ asset('assets/images/contact-us/Rectangle 39 (1).png') }}" alt="Where Are We Today"
                        class="w-full object-cover rounded-md">
                    <h3 class="text-lg font-medium text-blue-800 mt-4">Where Are We Today?</h3>
                        <x-ui.button variant="orange-tertiary" class="w-auto! py-2! mt-4">
                        {{ __('Learn More') }}
                    </x-ui.button>
                </div>
                <div class="bg-white rounded-lg">
                    <img src="{{ asset('assets/images/contact-us/Rectangle 39 (1).png') }}" alt="Where Are We Today"
                        class="w-full object-cover rounded-md">
                    <h3 class="text-lg font-medium text-blue-800 mt-4">Where Are We Today?</h3>
                        <x-ui.button variant="orange-tertiary" class="w-auto! py-2! mt-4">
                        {{ __('Learn More') }}
                    </x-ui.button>
                </div>
                <div class="bg-white rounded-lg">
                    <img src="{{ asset('assets/images/contact-us/Rectangle 39 (1).png') }}" alt="Where Are We Today"
                        class="w-full object-cover rounded-md">
                    <h3 class="text-lg font-medium text-blue-800 mt-4">Where Are We Today?</h3>
                        <x-ui.button variant="orange-tertiary" class="w-auto! py-2! mt-4">
                        {{ __('Learn More') }}
                    </x-ui.button>
                </div>
                <div class="bg-white rounded-lg">
                    <img src="{{ asset('assets/images/contact-us/Rectangle 39 (1).png') }}" alt="Where Are We Today"
                        class="w-full object-cover rounded-md">
                    <h3 class="text-lg font-medium text-blue-800 mt-4">Where Are We Today?</h3>
                        <x-ui.button variant="orange-tertiary" class="w-auto! py-2! mt-4">
                        {{ __('Learn More') }}
                    </x-ui.button>
                </div>
                <div class="bg-white rounded-lg">
                    <img src="{{ asset('assets/images/contact-us/Rectangle 39 (1).png') }}" alt="Where Are We Today"
                        class="w-full object-cover rounded-md">
                    <h3 class="text-lg font-medium text-blue-800 mt-4">Where Are We Today?</h3>
                        <x-ui.button variant="orange-tertiary" class="w-auto! py-2! mt-4">
                        {{ __('Learn More') }}
                    </x-ui.button>
                </div>
                <div class="bg-white rounded-lg">
                    <img src="{{ asset('assets/images/contact-us/Rectangle 39 (1).png') }}" alt="Where Are We Today"
                        class="w-full object-cover rounded-md">
                    <h3 class="text-lg font-medium text-blue-800 mt-4">Where Are We Today?</h3>
                        <x-ui.button variant="orange-tertiary" class="w-auto! py-2! mt-4">
                        {{ __('Learn More') }}
                    </x-ui.button>
                </div>
            </div>

            <!-- Download Section -->
            <div class="mt-12 flex flex-col lg:flex-row items-center gap-5">
                <h2 class="text-3xl font-semibold text-blue-800 mb-4">Download a free copy of our enforcement of writs
                    of control here</h2>
                <form action="#" method="post" class="max-w-3xl mx-auto p-6 rounded-lg shadow-lg">
                    <div class="space-y-4">
                        <input type="text" name="first-name" placeholder="First Name"
                            class="w-full p-3 rounded-md border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <input type="text" name="organization" placeholder="Organization"
                            class="w-full p-3 rounded-md border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <input type="email" name="email" placeholder="Your Email"
                            class="w-full p-3 rounded-md border border-gray-300 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <div class="flex items-center space-x-3">
                            <input type="checkbox" name="updates" class="h-4 w-4 text-blue-500 focus:ring-blue-500">
                            <label for="updates" class="text-sm text-gray-700">I am interested to receive
                                updates</label>
                        </div>
                        <button type="submit"
                            class="w-full px-6 py-3 bg-blue-600 text-white rounded-full text-sm font-medium hover:bg-blue-700 transition-all">Send
                            Us</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
