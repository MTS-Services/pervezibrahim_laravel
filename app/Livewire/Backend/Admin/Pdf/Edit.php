<?php

namespace App\Livewire\Backend\Admin\Pdf;

use App\Models\Pdf;
use App\Models\Admin;
use App\Enums\PdfPage;
use Livewire\Component;
use App\Services\PdfService;
use App\Enums\ActiveInactive;
use App\Livewire\Forms\PdfForm;
use Illuminate\Support\Facades\Log;
use App\Traits\Livewire\WithNotification;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads, WithNotification;

    public PdfForm $form;
    public Pdf $model;
    public $existingCoverImage;
    public $existingFile;

    protected PdfService $service;

    public function boot(PdfService $service)
    {
        $this->service = $service;
    }

    public function mount(Pdf $model): void
    {
        $this->model = $model;
        $this->form->setData($model);
        $this->existingCoverImage = $this->model->cover_image;
        $this->existingFile = $this->model->file;
    }

    public function render()
    {
        return view('livewire.backend.admin.pdf.edit', [
            'statuses' => ActiveInactive::options(),
            'pages' => PdfPage::options(),
        ]);
    }

    public function save()
    {
        $validated = $this->form->validate();
        try {
            $this->service->updateData($this->model->id, $validated);

            $this->dispatch('PdfUpdated');
            $this->success('Data updated successfully');
            return $this->redirect(route('admin.pdf.index'), navigate: true);
        } catch (\Throwable $e) {
            Log::error('Failed to update pdf', [
                'pdf_id' => $this->model->id,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            $this->error('Failed to update pdf.');
        }
    }

    public function resetForm(): void
    {
        $this->form->reset();
        $this->form->setData($this->model);
    }
}
