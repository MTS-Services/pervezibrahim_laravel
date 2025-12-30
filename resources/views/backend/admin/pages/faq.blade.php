<x-admin::app>
    <x-slot name="pageSlug">{{ __('admin-faq') }}</x-slot>

    @switch(Route::currentRouteName())
        @case('admin.faq.create')
            <x-slot name="title">{{ __('Faq Create') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Faq Management / Create') }}</x-slot>
            <livewire:backend.admin.faq.create />
        @break

        @case('admin.faq.edit')
            <x-slot name="title">{{ __('Faq Edit') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Faq / Edit') }}</x-slot>
            <livewire:backend.admin.faq.edit :model="$data" />
        @break

        @case('admin.faq.trash')
            <x-slot name="title">{{ __('Faq Trash') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Faq / Trash') }}</x-slot>
            <livewire:backend.admin.faq.trash />
        @break

        @case('admin.faq.view')
            <x-slot name="title">{{ __('Faq View') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Faq / View') }}</x-slot>
            <livewire:backend.admin.faq.view :model="$data" />
        @break

        @default
            <x-slot name="title">{{ __('Faq List') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Faq / List') }}</x-slot>
            <livewire:backend.admin.faq.index />
    @endswitch

</x-admin::app>
