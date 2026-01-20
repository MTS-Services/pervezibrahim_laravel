<section>
    <div class="glass-card rounded-2xl p-6 mb-6">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-bold text-text-black dark:text-text-white">{{ __('PDF Create') }}</h2>
            <div class="flex items-center gap-2">
                <x-ui.button href="{{ route('admin.pdf.index', ['page_slug' => request('page_slug')]) }}"
                    class="w-auto! py-2!">
                    <flux:icon name="arrow-left"
                        class="w-4 h-4 stroke-text-btn-primary group-hover:stroke-text-btn-secondary" />
                    {{ __('Back') }}
                </x-ui.button>
            </div>
        </div>
    </div>
    <div class="glass-card rounded-2xl p-6 mb-6">
        <form wire:submit="save">
            <!-- Add other form fields here -->
            <div class="mt-6 space-y-4 grid grid-cols-2 gap-5">
                <div class="w-full">
                    <x-ui.file-input wire:model.live="form.cover_image" label="{{ __('Thumbnail') }}" accept="image/*"
                        removeModel="form.remove_file" hint="Upload a profile picture (Max: 2MB)" />
                    <x-ui.input-error :messages="$errors->get('form.cover_image')" />
                </div>
                <div class="w-full">
                    <x-ui.file-input wire:model.live="form.file" label="{{ __('PDF File') }}" accept="application/pdf"
                        removeModel="form.remove_file" hint="Upload a PDF file (Max: 10MB)" />
                    <x-ui.input-error :messages="$errors->get('form.file')" />
                </div>
                <div class="w-full">
                    <x-ui.label value="{{ __('Title') }}" class="mb-1" />
                    <x-ui.input type="text" placeholder="{{ __('Title') }}" wire:model="form.title" />
                    <x-ui.input-error :messages="$errors->get('form.title')" />
                </div>
                <div class="w-full">
                    <x-ui.label value="{{ __('Action') }}" class="mb-1" />
                    <x-ui.input type="text" placeholder="{{ __('Action') }}" wire:model="form.action"
                        accept="url" />
                    <x-ui.input-error :messages="$errors->get('form.action')" />
                </div>
                <div class="w-full">
                    <x-ui.label value="{{ __('Select Status') }}" class="mb-1" />
                    <x-ui.select wire:model="form.status">
                        @foreach ($statuses as $status)
                            <option value="{{ $status['value'] }}">{{ $status['label'] }}</option>
                        @endforeach
                    </x-ui.select>
                    <x-ui.input-error :messages="$errors->get('form.status')" />
                </div>
                @if (request('page_slug') == App\Enums\PdfPage::CONTACT_US->value)
                    <div class="w-full">
                        <x-ui.label value="{{ __('Select Featured') }}" class="mb-1" />
                        <x-ui.select wire:model="form.is_featured">
                            <option value="1">{{ __('Yes') }}</option>
                            <option value="0">{{ __('No') }}</option>
                        </x-ui.select>
                        <x-ui.input-error :messages="$errors->get('form.is_featured')" />
                    </div>
                @endif

                {{-- <div class="w-full">
                    <x-ui.label value="{{ __('Page') }}" class="mb-1" />
                    <x-ui.select wire:model="form.page">
                        @foreach ($pages as $page)
                            <option value="{{ $page['value'] }}">{{ $page['label'] }}</option>
                        @endforeach
                    </x-ui.select>
                    <x-ui.input-error :messages="$errors->get('form.page')" />
                </div> --}}
            </div>
            {{-- <div class="w-full mt-8">
                <x-ui.label value="{{ __('Description') }}" class="mb-1" />
                <x-ui.textarea placeholder="{{ __('Description') }}" wire:model="form.description" rows="4" />
                <x-ui.input-error :messages="$errors->get('form.description')" />
            </div> --}}

            <!-- Form Actions -->
            <div class="flex items-center justify-end gap-4 mt-6">
                <x-ui.button wire:click="resetForm" variant="tertiary" class="w-auto! py-2!">
                    <flux:icon name="x-circle"
                        class="w-4 h-4 stroke-text-btn-primary group-hover:stroke-text-btn-tertiary" />
                    <span wire:loading.remove wire:target="resetForm"
                        class="text-text-btn-primary group-hover:text-text-btn-secondary">{{ __('Reset') }}</span>
                    <span wire:loading wire:target="resetForm"
                        class="text-text-btn-primary group-hover:text-text-btn-secondary">{{ __('Reseting...') }}</span>
                </x-ui.button>

                <x-ui.button class="w-auto! py-2!" type="submit">
                    <span wire:loading.remove wire:target="save"
                        class="text-text-btn-primary group-hover:text-text-btn-secondary">{{ __('Create') }}</span>
                    <span wire:loading wire:target="save"
                        class="text-text-btn-primary group-hover:text-text-btn-secondary">{{ __('Creating...') }}</span>
                </x-ui.button>
            </div>
        </form>
    </div>
</section>
