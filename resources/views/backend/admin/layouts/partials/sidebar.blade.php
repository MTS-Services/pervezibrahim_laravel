<aside class="transition-all duration-300 ease-in-out z-20 max-h-screen py-2 pl-2"
    :class="{
        'w-72': desktop && sidebar_expanded,
        'w-20': desktop && !sidebar_expanded,
        'fixed top-0 left-0 h-full': !desktop,
        'w-72 translate-x-0': !desktop && mobile_menu_open,
        'w-72 -translate-x-full': !desktop && !mobile_menu_open,
    }">

    <div class="sidebar-glass-card h-full rounded-xl overflow-y-auto">
        <a href="{{ route('admin.dashboard') }}" wire:navigate class="p-4 inline-block">
            <div class="flex items-center gap-4">
                <div class="w-10 h-10  shadow inset-shadow-lg p-0 rounded-xl flex items-center justify-center">
                    {{-- <flux:icon name="bolt" class="w-5 h-5 text-zinc-500" /> --}}
                    <img src="{{ site_logo() }}" alt="">
                </div>
                <div x-show="(desktop && sidebar_expanded) || (!desktop && mobile_menu_open)"
                    x-transition:enter="transition-all duration-300 delay-75"
                    x-transition:enter-start="opacity-0 translate-x-4"
                    x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition-all duration-200"
                    x-transition:leave-start="opacity-100 translate-x-0"
                    x-transition:leave-end="opacity-0 -translate-x-4">
                    <h1 class="text-xl font-bold text-accent-content">{{ site_short_name() }}</h1>
                    <p class="text-text-secondary text-sm">{{ site_name() }}</p>
                </div>
            </div>
        </a>

        <flux:separator class="bg-accent!" />

        <nav class="p-2 space-y-2">
            <x-backend.navlink type="single" icon="layout-dashboard" name="Dashboard" :route="route('admin.dashboard')"
                active="admin-dashboard" :page_slug="$active" />
            {{-- <x-backend.navlink type="single" icon="chart-pie" name="Analytics" active="analytics" :page_slug="$active" />
            <x-backend.navlink type="single" icon="inbox" name="Inbox" active="inbox" :page_slug="$active" /> --}}

            <div class="pt-4 pb-2">
                <p class="text-xs font-semibold text-zinc-600 dark:text-zinc-400 uppercase"
                    x-show="(desktop && sidebar_expanded) || (!desktop && mobile_menu_open)">{{ __('Management') }}</p>
                <p class="text-center text-xs font-semibold text-zinc-600 dark:text-zinc-400 uppercase"
                    x-show="desktop && !sidebar_expanded">...</p>
            </div>

            <x-backend.navlink type="dropdown" icon="user-group" name="User Management" :page_slug="$active"
                :items="[
                    [
                        'name' => 'Admins',
                        'route' => route('admin.um.admin.index'),
                        'icon' => 'user-circle',
                        'active' => 'admin',
                    ],
                    // [
                    //     'name' => 'Users',
                    //     'route' => route('admin.um.user.index'),
                    //     'icon' => 'user',
                    //     'active' => 'admin-users',
                    // ],

                    // [
                    //     'name' => 'Pending Users',
                    //     'route' => '#',
                    //     'icon' => 'user-plus',
                    //     'active' => 'admin-users-pending',
                    // ],
                    // [
                    //     'name' => 'Banned Users',
                    //     'route' => '#',
                    //     'icon' => 'user-round-x',
                    //     'active' => 'admin-users-banned',
                    // ],
                ]" />
            <x-backend.navlink type="dropdown" icon="video-camera" name="Video Management" :page_slug="$active"
                :items="[
                    [
                        'name' => 'Home Banner',
                        'route' => route('admin.video.home-banner'),
                        'icon' => 'play-circle',
                        'active' => 'home-banner',
                    ],
                    [
                        'name' => 'About-Us',
                        'route' => route('admin.video.about-us'),
                        'icon' => 'play-circle',
                        'active' => 'about-us',
                    ],
                    [
                        'name' => 'About-Gallery',
                        'route' => route('admin.video.about-us-gallery'),
                        'icon' => 'play-circle',
                        'active' => 'about-us-gallery',
                    ],
                    [
                        'name' => 'Services',
                        'route' => route('admin.video.service'),
                        'icon' => 'play-circle',
                        'active' => 'services',
                    ],
                    [
                        'name' => 'Gallery',
                        'route' => route('admin.video.gallery'),
                        'icon' => 'play-circle',
                        'active' => 'gallery',
                    ],
                ]" />
            <x-backend.navlink type="dropdown" icon="document" name="PDF Management" :page_slug="$active"
                :items="[
                    [
                        'name' => 'Contract PDF',
                        'route' => route('admin.pdf.index', ['page_slug' => App\Enums\PdfPage::CONTACT_US->value]),
                        'icon' => 'document-text',
                        'active' => App\Enums\PdfPage::CONTACT_US->value,
                    ],
                    [
                        'name' => 'Method PDF',
                        'route' => route('admin.pdf.index', ['page_slug' => App\Enums\PdfPage::METHOD->value]),
                        'icon' => 'document-text',
                        'active' => App\Enums\PdfPage::METHOD->value,
                    ],
                ]" />
            <x-backend.navlink type="single" icon="question-mark-circle" name="Faq" :route="route('admin.faq.index')"
                active="admin-faq" :page_slug="$active" />

            <div class="space-y-2">
                <flux:separator class="bg-accent!" />
                {{-- <x-backend.navlink type="single" icon="user" name="Profile" active="profile" :page_slug="$active" /> --}}
                <button wire:click="logout" class="w-full text-left">
                    <x-backend.navlink type="single" icon="power" name="Logout" />
                </button>
            </div>
        </nav>
    </div>
</aside>
