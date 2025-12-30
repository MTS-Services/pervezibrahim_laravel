<x-frontend::app>
    <x-slot name="title">{{ __('Method') }}</x-slot>
    <x-slot name="pageSlug">{{ __('method') }}</x-slot>
    
    @switch(Route::currentRouteName())
        @case('method.reader')
        <livewire:frontend.method-reader :slug="request()->segment(count(request()->segments()))" />
        @break

        @default
            <livewire:frontend.method />
    @endswitch

</x-frontend::app>
