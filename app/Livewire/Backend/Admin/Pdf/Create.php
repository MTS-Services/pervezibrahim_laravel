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

    public string $page_slug = PdfPage::CONTACT_US->value;

    protected $queryString = [
        'page_slug' => ['except' => PdfPage::CONTACT_US->value],
    ];

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
            $validated['created_by'] = admin()->id;
            $validated['is_featured'] = $data['is_featured'] ?? false;

            if ($this->page_slug == PdfPage::CONTACT_US->value) {
                $validated['page'] = PdfPage::CONTACT_US->value;
            } elseif ($this->page_slug == PdfPage::METHOD->value) {
                $validated['page'] = PdfPage::METHOD->value;
            }

            $this->service->createData($validated);

            $this->dispatch('PdfCreated');
            $this->success('Data created successfully');
            return $this->redirect(route('admin.pdf.index', ['page_slug' => $this->page_slug]), navigate: true);
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
