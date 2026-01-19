<div x-data="{
    videoFormOpen: @entangle('videoFormOpen').live
}" x-show="videoFormOpen" x-cloak x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0" @video-form-open.window="videoFormOpen = true"
    class="fixed inset-0 flex items-center justify-center bg-black/5 backdrop-blur-2xl h-screen z-30">
    <div class="shadow-glass-card p-4 rounded-2xl glass max-w-3xl w-full max-h-[90vh] overflow-y-auto">
        <div class="flex items-center justify-between mb-6 gap-5">
            <h2 class="text-xl font-bold">{{ __('Video Form') }}</h2>
            <x-ui.button variant="orange-tertiary" class="w-auto! p-2! rounded-full" @click="videoFormOpen = false">
                <flux:icon name="x-circle"
                    class="w-6 h-6 stroke-text-btn-primary group-hover:stroke-text-btn-tertiary" />
            </x-ui.button>
        </div>
        @if ($isLoading)
            <p class="text-center">Loading...</p>
        @else
            <form wire:submit="{{ $editMode ? 'update' : 'save' }}" class="space-y-6">
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
                    {{-- @if ($model->page === App\Enums\Page::ABOUT_GALLERY->value || $model->page === App\Enums\Page::SERVICE->value) --}}
                        <div class="w-full">
                            <x-ui.label value="{{ __('Title') }}" class="mb-1" />
                            <x-ui.input type="text" placeholder="{{ __('Title') }}" wire:model="form.title" />
                            <x-ui.input-error :messages="$errors->get('form.title')" />
                        </div>
                        <div class="w-full">
                            <x-ui.label value="{{ __('Description') }}" class="mb-1" />
                            <x-ui.textarea placeholder="{{ __('Description') }}" wire:model="form.description"
                                rows="4" />
                            <x-ui.input-error :messages="$errors->get('form.description')" />
                        </div>
                    {{-- @endif --}}
                    <div class="w-full">
                        <x-ui.label value="{{ __('Action') }}" class="mb-1" />
                        <x-ui.input type="text" placeholder="{{ __('Action') }}" wire:model="form.action" accept="url" />
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
                        @if ($editMode)
                            <span wire:loading.remove wire:target="update"
                                class="text-text-btn-primary group-hover:text-text-btn-secondary">{{ __('Update ') }}</span>
                            <span wire:loading wire:target="update"
                                class="text-text-btn-primary group-hover:text-text-btn-secondary">{{ __('Updating...') }}</span>
                        @else
                            <span wire:loading.remove wire:target="save"
                                class="text-text-btn-primary group-hover:text-text-btn-secondary">{{ __('Create ') }}</span>
                            <span wire:loading wire:target="save"
                                class="text-text-btn-primary group-hover:text-text-btn-secondary">{{ __('Creating...') }}</span>
                        @endif
                    </x-ui.button>
                </div>
            </form>
        @endif
    </div>
</div>
