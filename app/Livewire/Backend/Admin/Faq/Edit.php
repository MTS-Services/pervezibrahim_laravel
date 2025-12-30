<?php

namespace App\Livewire\Backend\Admin\Faq;

use App\Enums\ActiveInactive;
use App\Livewire\Forms\FaqForm;
use App\Models\Admin;
use App\Models\Faq;
use App\Services\FaqService;
use App\Traits\Livewire\WithNotification;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads, WithNotification;

    public FaqForm $form;
    public Faq $model;

    protected FaqService $service;

    public function boot(FaqService $service)
    {
        $this->service = $service;
    }

    public function mount(Faq $model): void
    {
        $this->model = $model;
        $this->form->setData($model);
    }

    public function render()
    {
        return view('livewire.backend.admin.faq.edit', [
            'statuses' => ActiveInactive::options(),
        ]);
    }

    public function save()
    {
        $validated = $this->form->validate();
        try {
            $validated['updater_by'] = Admin::class;
            $this->service->updateData($this->model->id, $validated);

            $this->dispatch('FaqUpdated');
            $this->success('Data updated successfully');
            return $this->redirect(route('admin.faq.index'), navigate: true);
        } catch (\Throwable $e) {
            Log::error('Failed to update faq', [
                'faq_id' => $this->model->id,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            $this->error('Failed to update faq.');
        }
    }

    public function resetForm(): void
    {
        $this->form->reset();
        $this->form->setData($this->model);
    }
}
