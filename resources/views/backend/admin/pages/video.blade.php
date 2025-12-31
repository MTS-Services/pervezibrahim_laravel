<x-admin::app>
    <x-slot name="pageSlug">{{ __('admin-video') }}</x-slot>

    @switch(Route::currentRouteName())
        @case('admin.video.create')
            <x-slot name="title">{{ __('Video Create') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Video Management / Create') }}</x-slot>
            <livewire:backend.admin.video.create />
        @break

        @case('admin.video.edit')
            <x-slot name="title">{{ __('Video Edit') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Video / Edit') }}</x-slot>
            <livewire:backend.admin.video.edit :model="$data" />
        @break

        @case('admin.video.trash')
            <x-slot name="title">{{ __('Video Trash') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Videos / Trash') }}</x-slot>
            <livewire:backend.admin.video.trash />
        @break

        @case('admin.video.view')
            <x-slot name="title">{{ __('Video View') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Video / View') }}</x-slot>
            <livewire:backend.admin.video.view :model="$data" />
        @break

        @default
            <x-slot name="title">{{ __('Video List') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Videos / List') }}</x-slot>
            <livewire:backend.admin.video.index />
    @endswitch

</x-admin::app>
