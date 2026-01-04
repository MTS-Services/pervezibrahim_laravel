<?php

namespace App\Livewire\Backend\Admin\Pdf;


use App\Models\Admin;
use App\Enums\PdfPage;
use Livewire\Component;
use App\Services\PdfService;
use App\Enums\ActiveInactive;
use Livewire\WithFileUploads;
use App\Livewire\Forms\PdfForm;
use Illuminate\Support\Facades\Log;
use App\Traits\Livewire\WithNotification;

class Create extends Component
{
    use WithFileUploads, WithNotification;

    public PdfForm $form;

    protected PdfService $service;

    public function boot(PdfService $service)
    {
        $this->service = $service;
    }

    public function render()
    {
        return view('livewire.backend.admin.pdf.create', [
            'statuses' => ActiveInactive::options(),
            'pages' => PdfPage::options(),
        ]);
    }
    public function save()
    {
        $validated = $this->form->validate();
        try {
            $validated['created_by'] = Admin::class;
            $this->service->createData($validated);

            $this->dispatch('PdfCreated');
            $this->success('Data created successfully');
            return $this->redirect(route('admin.pdf.index', ['page_slug' => request('page_slug')]), navigate: true);
        } catch (\Exception $e) {
            Log::error('Failed to create pdf: ' . $e->getMessage());
            $this->error('Failed to create pdf.');
        }
    }

    public function resetForm(): void
    {
        $this->form->reset();
    }
}
