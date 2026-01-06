<div>
    {{-- Page Header --}}

    <div class="bg-bg-secondary w-full rounded">
        <div class="mx-auto">
            <div class="bg-white border border-gray-200 rounded-2xl p-4 lg:p-6 mb-6">
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <h2 class="text-xl lg:text-2xl font-bold text-text-black dark:text-text-white">
                        {{ __('Faq Details') }}
                    </h2>
                    <div class="flex items-center gap-2 w-full sm:w-auto">
                        <x-ui.button href="{{ route('admin.contact-form.index') }}" class="w-auto py-2!">
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
                    <!-- Product Data Section -->
                    <div class="px-8 py-8">
                        <div class="mb-10">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                <div class="bg-slate-50   rounded-lg p-4 border border-slate-200">
                                    <p class="text-text-white text-xs font-semibold mb-2 uppercase">{{ __('Name') }}
                                    </p>

                                    <p class="text-slate-400 text-lg font-bold">{{ $model->name }}</p>
                                </div>
                                <div class="bg-slate-50 rounded-lg p-4 border border-slate-200">
                                    <p class="text-text-white text-xs font-semibold mb-2 uppercase">
                                        {{ __('Organization') }}
                                    </p>
                                    <p class="text-slate-400 text-lg font-bold">{{ $model->organization }}</p>
                                </div>
                                <div class="bg-slate-50 rounded-lg p-4 border border-slate-200">
                                    <p class="text-text-white text-xs font-semibold mb-2 uppercase">{{ __('Email') }}
                                    </p>
                                    <p class="text-slate-400 text-lg font-bold">{{ $model->email }}</p>
                                </div>

                                <div class="bg-slate-50 rounded-lg p-4 border border-slate-200">
                                    <p class="text-text-white text-xs font-semibold mb-2 uppercase">
                                        {{ __('Is_receive_email') }}
                                    </p>
                                    <p class="text-slate-400 text-lg font-bold">
                                        {{ $model->is_receive_email ? 'false' : 'true' }}</p>
                                </div>

                                <div class="bg-slate-50 rounded-lg p-4 border border-slate-200">
                                    <p class="text-text-white text-xs font-semibold mb-2 uppercase">{{ __('Created') }}
                                    </p>
                                    <p class="text-slate-400 text-lg font-bold">{{ $model->created_at }}</p>
                                </div>

                                <div class="bg-slate-50 rounded-lg p-4 border border-slate-200">
                                    <p class="text-text-white text-xs font-semibold mb-2 uppercase">{{ __('Updated') }}
                                    </p>
                                    <p class="text-slate-400 text-lg font-bold">{{ $model->updated_at }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
