<div>
    <section class="rounded-3xl relative bg-black text-white min-h-[50vh] overflow-hidden container mx-auto">
        <!-- Background Pattern Overlay -->
        <div class="absolute inset-0 opacity-100 pointer-events-none">
            <img src="{{ asset('assets/images/home_page/Union (1).png') }}" alt=""
                class="w-full h-full object-cover" />
        </div>

        <!-- Header / Navigation -->
        <header class="relative z-10 flex items-center justify-between px-6 py-8">
        </header>

        <!-- Hero Content -->
        <main class="relative z-10 container mx-auto px-6 mt-12 grid grid-cols-1 gap-12 items-center">
            <!-- Right: Text Section -->
            <div class="flex flex-col mt-32">
                <h1 class="text-3xl font-bold text-wrap text-white">
                    Terms & <br>Conditions
                </h1>
            </div>
        </main>
    </section>


    <section class="py-12">
        <div class="container">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 items-stretch">
                <h1 class="text-[#002060] font-bold text-20px">Terms of Service & Usage Policy</h1>


            </div>

            <div class="mt-16 flex flex-col lg:flex-row justify-center items-center gap-12 lg:gap-20 font-medium">
                <p>
                    By accessing and using the ebSixOne website, digital platforms, and related services, you
                    acknowledge that you have read, understood, and agreed to these Terms and Conditions. Our services
                    include Business Process Management (BPM), AI-driven analytics, automation tools, consulting, and
                    technology-based insights designed to support business decision-making. All services are provided on
                    an “as-is” and “as-available” basis, and while we aim to deliver accurate, reliable, and up-to-date
                    information, ebSixOne makes no warranties or guarantees regarding performance, outcomes, or
                    suitability for any specific business purpose.
                    <br>
                    <br>
                    The insights, predictions, reports, and recommendations generated through our AI and technology
                    solutions are intended for informational and strategic support only. Final decisions,
                    implementations, and outcomes remain solely the responsibility of the user. ebSixOne shall not be
                    liable for any financial loss, operational impact, or business decisions made based on the use of
                    our services, tools, or data outputs.
                    <br>
                    <br>
                    All content available on this platform, including text, visuals, graphics, dashboards, software
                    components, system designs, AI models, trademarks, and logos, is the exclusive intellectual property
                    of ebSixOne. Any unauthorized copying, reproduction, modification, redistribution, or commercial use
                    of our materials without prior written consent is strictly prohibited. Users must not attempt to
                    access restricted systems, interfere with platform functionality, or engage in any activity that may
                    compromise security or service integrity.
                    <br>
                    <br>
                    Users are responsible for maintaining the confidentiality of their account credentials and for all
                    activities conducted under their access. ebSixOne reserves the right to suspend, restrict, or
                    terminate access to its services at any time if misuse, violation of these terms, or unlawful
                    activity is suspected, with or without prior notice.
                    <br>
                    <br>
                    Our platform may contain links to or integrations with third-party websites, tools, or services.
                    ebSixOne does not control and is not responsible for the content, policies, security, or practices
                    of any third-party platforms. Use of such services is at the user’s own discretion and risk.
                    <br>
                    <br>
                    ebSixOne reserves the right to update, modify, or replace these Terms and Conditions at any time to
                    reflect changes in services, technology, or legal requirements. Any updates will become effective
                    immediately upon publication. Continued use of the website or services after such changes
                    constitutes acceptance of the revised terms.
                </p>
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
            class="container bg-gradient-to-r from-second-500 to-zinc-900 rounded-3xl p-12 text-center shadow-2xl border-4 border-zinc-100">
            <img src="{{ asset('assets/images/home_page/logo.png') }}" alt="" class="mx-auto w-full max-w-xs">
            <h2 class="text-white text-56px font-bold mb-4">Ready to Get Started?</h2>
            <p class="text-white text-lg font-bold max-w-2xl mx-auto">Business Process Management (BPM) software that
                can capture the organisational "Value Chain," which is the Business "DNA."</p>
        </div>
    </section>
</div>
