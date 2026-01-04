<div>
    {{-- Page Header --}}

    <div class="bg-bg-secondary w-full rounded">
        <div class="mx-auto">
            <div class="glass-card rounded-2xl p-4 lg:p-6 mb-6">
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <h2 class="text-xl lg:text-2xl font-bold text-text-black dark:text-text-white">
                        {{ __('PDF Details') }}
                    </h2>
                    <div class="flex items-center gap-2 w-full sm:w-auto">
                        <x-ui.button href="{{ route('admin.pdf.index') }}" class="w-auto py-2!">
                            <flux:icon name="arrow-left"
                                class="w-4 h-4 stroke-text-btn-primary group-hover:stroke-text-btn-secondary" />
                            {{ __('Back') }}
                        </x-ui.button>
                    </div>
                </div>
            </div>
            <!-- Main Card -->
            <div class="bg-bg-primary rounded-2xl shadow-lg overflow-hidden border border-gray-500/20">

                <div class="glass-card shadow-glass-card rounded-xl p-6 min-h-[500px]">
                    <div class="mb-6 px-8 pt-4 w-full max-w-md">
                        <a href="{{ $model->action }}">
                            <img src="{{ storage_url($model->cover_image) }}" alt="PDF Preview"
                                class="w-full h-auto max-h-[400px] object-contain">
                        </a>
                    </div>
                    <!-- Product Data Section -->
                    <div class="px-8 py-8">
                        <div class="mb-10">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                <div class="bg-slate-50 dark:bg-gray-700 rounded-lg p-4 border border-slate-200">
                                    <p class="text-text-white text-xs font-semibold mb-2 uppercase">{{ __('Title') }}
                                    </p>
                                    <p class="text-slate-400 text-lg font-bold">{{ $model->title }}</p>
                                </div>
                                <div class="bg-slate-50 dark:bg-gray-700 rounded-lg p-4 border border-slate-200">
                                    <p class="text-text-white text-xs font-semibold mb-2 uppercase">{{ __('Page') }}
                                    </p>
                                    <p class="text-slate-400 text-lg font-bold">{{ $model->page }}</p>
                                </div>
                                <div class="bg-slate-50 dark:bg-gray-700 rounded-lg p-4 border border-slate-200">
                                    <p class="text-text-white text-xs font-semibold mb-2 uppercase">{{ __('Status') }}
                                    </p>
                                    <p class="text-slate-400 text-lg font-bold">{{ $model->status }}</p>
                                </div>
                                <div class="bg-slate-50 dark:bg-gray-700 rounded-lg p-4 border border-slate-200">
                                    <p class="text-text-white text-xs font-semibold mb-2 uppercase">
                                        {{ __('Featured') }}
                                    </p>
                                    <p class="text-slate-400 text-lg font-bold">
                                        {{ $model->is_featured ? 'Yes' : 'No' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
