<x-admin::app>

    @switch(Route::currentRouteName())
        @case('admin.video.create')
            <x-slot name="title">{{ __('Video Create') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Video Management / Create') }}</x-slot>
            <x-slot name="pageSlug">{{ __('video') }}</x-slot>
            <livewire:backend.admin.video.create />
        @break

        @case('admin.video.edit')
            <x-slot name="title">{{ __('Video Edit') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Video / Edit') }}</x-slot>
            <x-slot name="pageSlug">{{ __('video') }}</x-slot>
            <livewire:backend.admin.video.edit :model="$data" />
        @break

        @case('admin.video.trash')
            <x-slot name="title">{{ __('Video Trash') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Videos / Trash') }}</x-slot>
            <x-slot name="pageSlug">{{ __('video') }}</x-slot>
            <livewire:backend.admin.video.trash />
        @break

        @case('admin.video.view')
            <x-slot name="title">{{ __('Video View') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Video / View') }}</x-slot>
            <x-slot name="pageSlug">{{ __('video') }}</x-slot>
            <livewire:backend.admin.video.view :model="$data" />
        @break

        @case('admin.video.about-us')
            <x-slot name="title">{{ __('About Us List') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('About Us / List') }}</x-slot>
            <x-slot name="pageSlug">{{ __('about-us') }}</x-slot>
            <livewire:backend.admin.video.about-us />
        @break

        @case('admin.video.about-us-gallery')
            <x-slot name="title">{{ __('About Us Gallery List') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('About Us Gallery / List') }}</x-slot>
            <x-slot name="pageSlug">{{ __('about-us-gallery') }}</x-slot>
            <livewire:backend.admin.video.about-us-gallery />
        @break

        @case('admin.video.service')
            <x-slot name="title">{{ __('Service List') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Service / List') }}</x-slot>
            <x-slot name="pageSlug">{{ __('services') }}</x-slot>
            <livewire:backend.admin.video.service />
        @break

        @case('admin.video.gallery')
            <x-slot name="title">{{ __('Gallery List') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Gallery / List') }}</x-slot>
            <x-slot name="pageSlug">{{ __('gallery') }}</x-slot>
            <livewire:backend.admin.video.gallery />
        @break

        @default
            <x-slot name="title">{{ __('Home Banner List') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Home Banner / List') }}</x-slot>
            <x-slot name="pageSlug">{{ __('home-banner') }}</x-slot>
            <livewire:backend.admin.video.home-banner />
    @endswitch

    <livewire:backend.admin.video.store />

</x-admin::app>
