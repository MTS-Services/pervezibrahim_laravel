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

    public string $page_slug = PdfPage::CONTACT_US->value;

    protected $queryString = [
        'page_slug' => ['except' => PdfPage::CONTACT_US->value],
    ];


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
            if ($this->page_slug == PdfPage::CONTACT_US->value) {
                $validated['page'] = PdfPage::CONTACT_US->value;
            } elseif ($this->page_slug == PdfPage::METHOD->value) {
                $validated['page'] = PdfPage::METHOD->value;
            }
            $validated['updated_by'] = admin()->id;
            $validated['is_featured'] = $validated['is_featured'] ? 1 : 0;

            $this->service->updateData($this->model->id, $validated);

            $this->dispatch('PdfUpdated');
            $this->success('Data updated successfully');
            return $this->redirect(route('admin.pdf.index', ['page_slug' => $this->page_slug]), navigate: true);
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
