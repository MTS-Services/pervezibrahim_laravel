<section>

    {{-- Page Header --}}
    <div class="bg-white border border-gray-200 rounded-2xl p-4 lg:p-6 mb-6">
        <div class="">
            <h2 class="text-xl lg:text-2xl font-bold text-text-primary">
                {{ __('Update Home page Banner') }}
            </h2>

            <form wire:submit="save" class="space-y-6">
                <!-- Add other form fields here -->
                <div class="mt-6 space-y-4 grid grid-cols-2 gap-5">
                    <div class="w-full">
                        <x-ui.file-input wire:model="form.thumbnail" label="{{ __('Thumbnail') }}" accept="image/*"
                            :existingFiles="$existingThumbnail" removeModel="form.remove_file"
                            hint="Upload a profile picture (Max: 2MB)" />
                        <x-ui.input-error :messages="$errors->get('form.thumbnail')" />
                    </div>
                    <div class="w-full">
                        <x-ui.file-input wire:model="form.file" label="{{ __('Video File') }}" accept="video/*"
                            :existingFiles="$existingFile" removeModel="form.remove_file" hint="Upload a video file (Max: 10MB)" />
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
                </div>

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
                        <span wire:loading.remove wire:target="update"
                            class="text-text-btn-primary group-hover:text-text-btn-secondary">{{ __('Update User') }}</span>
                        <span wire:loading wire:target="update"
                            class="text-text-btn-primary group-hover:text-text-btn-secondary">{{ __('Updating...') }}</span>
                    </x-ui.button>
                </div>
            </form>
        </div>
</section>
