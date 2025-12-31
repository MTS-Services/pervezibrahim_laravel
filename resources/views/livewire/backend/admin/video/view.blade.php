<div>
    {{-- Page Header --}}

    <div class="w-full rounded">
        <div class="mx-auto">
            <div class="glass-card rounded-2xl p-4 lg:p-6 mb-6">
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <h2 class="text-xl lg:text-2xl font-bold text-text-black dark:text-white">
                        {{ __('Video Details') }}
                    </h2>
                    <div class="flex items-center gap-2 w-full sm:w-auto">
                        <x-ui.button href="{{ route('admin.video.index') }}" class="w-auto py-2!">
                            <flux:icon name="arrow-left"
                                class="w-4 h-4 stroke-text-btn-primary group-hover:stroke-text-btn-secondary" />
                            {{ __('Back') }}
                        </x-ui.button>
                    </div>
                </div>
            </div>
            <!-- Main Card -->
            <div class="glass-card rounded-2xl shadow-lg overflow-hidden border border-gray-500/20 min-h-[500px]">
                <div class="w-52 h-52 rounded-md m-8 border-4 border-pink-100 overflow-hidden">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNu9uulWIgqP6ax8ikiM4eQUf2cNqGtOMkaQ&s"
                        alt="Profile Image" class="w-full h-full object-cover">
                </div>
                @if ($model->description != null)
                    <div class="px-8 py-4">
                        <h5 class="text-white text-md font-semibold mb-2 uppercase">Description</h5>
                        <p class="text-slate-400 text-lg font-bold">{{ $model->description }}</p>
                    </div>
                @endif
                <!-- Product Data Section -->
                <div class="px-8 py-8">
                    <div class="mb-10">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="bg-slate-50 dark:bg-gray-700 rounded-lg p-4 border border-slate-200">
                                <p class="text-white text-xs font-semibold mb-2 uppercase">{{ __('Title') }}
                                </p>
                                <p class="text-slate-400 text-lg font-bold">{{ $model->title }}</p>
                            </div>
                            <div class="bg-slate-50 dark:bg-gray-700 rounded-lg p-4 border border-slate-200">
                                <p class="text-white text-xs font-semibold mb-2 uppercase">{{ __('Action') }}
                                </p>
                                <p class="text-slate-400 text-lg font-bold">{{ $model->action }}</p>
                            </div>
                            <div class="bg-slate-50 dark:bg-gray-700 rounded-lg p-4 border border-slate-200">
                                <p class="text-white text-xs font-semibold mb-2 uppercase">{{ __('Status') }}
                                </p>
                                <p class="text-slate-400 text-lg font-bold">{{ $model->status }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
