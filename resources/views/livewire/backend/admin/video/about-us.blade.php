<section>

    {{-- Page Header --}}
    <div class="bg-white border border-gray-200 rounded-2xl p-4 lg:p-6 mb-6">
        <div class="">
            <h2 class="text-xl lg:text-2xl font-bold text-text-primary">
                {{ __('Update About Us page Banner') }}
            </h2>

            <form wire:submit="save" class="space-y-6">
                <!-- Add other form fields here -->
                <div class="mt-6 space-y-4 grid grid-cols-2 gap-5">
                    <div class="w-full">
                        <x-ui.file-input wire:model="form.thumbnail_one" label="{{ __('Thumbnail One') }}" accept="image/*"
                            :existingFiles="$existingThumbnailOne" removeModel="form.remove_file"
                            hint="Upload a profile picture (Max: 2MB)" />
                        <x-ui.input-error :messages="$errors->get('form.thumbnail_one')" />
                    </div>
                    <div class="w-full">
                        <x-ui.file-input wire:model="form.file_one" label="{{ __('Video File One') }}" accept="video/*"
                            :existingFiles="$existingFileOne" removeModel="form.remove_file" hint="Upload a video file (Max: 10MB)" />
                        <x-ui.input-error :messages="$errors->get('form.file_one')" />
                    </div>
                    <div class="w-full">
                        <x-ui.file-input wire:model="form.thumbnail_two" label="{{ __('Thumbnail Two') }}"
                            accept="image/*" :existingFiles="$existingThumbnailTwo" removeModel="form.remove_file"
                            hint="Upload a profile picture (Max: 2MB)" />
                        <x-ui.input-error :messages="$errors->get('form.thumbnail_two')" />
                    </div>
                    <div class="w-full">
                        <x-ui.file-input wire:model="form.file_two" label="{{ __('Video File Two') }}" accept="video/*"
                            :existingFiles="$existingFileTwo" removeModel="form.remove_file" hint="Upload a video file (Max: 10MB)" />
                        <x-ui.input-error :messages="$errors->get('form.file_two')" />
                    </div>
                </div>

                <div class="w-full">
                    <x-ui.label value="{{ __('Description') }}" class="mb-1" />
                    <x-ui.textarea placeholder="{{ __('Description') }}" wire:model="form.description" rows="4" />
                    <x-ui.input-error :messages="$errors->get('form.description')" />
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
