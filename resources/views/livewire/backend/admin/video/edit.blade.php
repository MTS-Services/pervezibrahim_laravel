<section>
    <div class="glass-card rounded-2xl p-6 mb-6">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-bold text-text-black dark:text-text-white">{{ __('Video Edit') }}</h2>
            <div class="flex items-center gap-2">
                <x-ui.button href="{{ route('admin.video.index') }}" class="w-auto! py-2!">
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
                    {{-- <x-ui.file-input wire:model="form.thumbnail" label="{{ __('Thumbnail') }}" accept="image/*"
                        :error="$errors->first('form.thumbnail')" hint="Upload a profile picture (Max: 2MB)" /> --}}
                        <x-ui.file-input wire:model="form.thumbnail" label="{{ __('Thumbnail') }}" accept="image/*" :error="$errors->first('form.thumbnail')"
                    hint="Upload a profile picture (Max: 2MB)" />
                </div>
                <div class="w-full">
                    <x-ui.file-input wire:model="form.file" label="{{ __('Video File') }}" accept="video/*"
                        hint="Upload a video file (Max: 10MB)" />
                    <x-ui.input-error :messages="$errors->get('form.file')" />
                </div>
                <div class="w-full">
                    <x-ui.label value="{{ __('Title') }}" class="mb-1" />
                    <x-ui.input type="text" placeholder="{{ __('Title') }}" wire:model="form.title" />
                    <x-ui.input-error :messages="$errors->get('form.title')" />
                </div>
                <div class="w-full">
                    <x-ui.label value="{{ __('Page') }}" class="mb-1" />
                    <x-ui.input type="text" placeholder="{{ __('Page') }}" wire:model="form.page" />
                    <x-ui.input-error :messages="$errors->get('form.page')" />
                </div>
                <div class="w-full">
                    <x-ui.label value="{{ __('Action') }}" class="mb-1" />
                    <x-ui.input type="text" placeholder="{{ __('Action') }}" wire:model="form.action" />
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
                    <span wire:loading.remove wire:target="save"
                        class="text-text-btn-primary group-hover:text-text-btn-secondary">{{ __('Update User') }}</span>
                    <span wire:loading wire:target="save"
                        class="text-text-btn-primary group-hover:text-text-btn-secondary">{{ __('Updating...') }}</span>
                </x-ui.button>
            </div>
        </form>
    </div>
</section>
