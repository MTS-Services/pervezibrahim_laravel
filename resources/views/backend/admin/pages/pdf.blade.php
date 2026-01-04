<x-admin::app>
    <x-slot name="pageSlug">{{ request('page') }}</x-slot>

    @switch(Route::currentRouteName())
        @case('admin.pdf.create')
            <x-slot name="title">{{ __('Pdf Create') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Pdf Management / Create') }}</x-slot>
            <livewire:backend.admin.pdf.create />
        @break

        @case('admin.pdf.edit')
            <x-slot name="title">{{ __('Pdf Edit') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Pdf / Edit') }}</x-slot>
            <livewire:backend.admin.pdf.edit :model="$data" />
        @break

        @case('admin.pdf.trash')
            <x-slot name="title">{{ __('Pdf Trash') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Pdf / Trash') }}</x-slot>
            <livewire:backend.admin.pdf.trash />
        @break

        @case('admin.pdf.view')
            <x-slot name="title">{{ __('Pdf View') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Pdf / View') }}</x-slot>
            <livewire:backend.admin.pdf.view :model="$data" />
        @break

        @default
            <x-slot name="title">{{ __('Pdf List') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Pdf / List') }}</x-slot>
            <livewire:backend.admin.pdf.index />
    @endswitch

</x-admin::app>
