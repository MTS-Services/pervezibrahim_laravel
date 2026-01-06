<x-admin::app>
    <x-slot name="pageSlug">{{ __('contact-form') }}</x-slot>

    @switch(Route::currentRouteName())
        @case('admin.contact-form.view')
            <x-slot name="title">{{ __('Contact Form View') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('Contact Form / View') }}</x-slot>
            <livewire:backend.admin.contact-form.view :model="$data" />
        @break

        @default
            <x-slot name="title">{{ __('contact-form List') }}</x-slot>
            <x-slot name="breadcrumb">{{ __('contact form / List') }}</x-slot>
            <livewire:backend.admin.contact-form.index />
    @endswitch

</x-admin::app>
