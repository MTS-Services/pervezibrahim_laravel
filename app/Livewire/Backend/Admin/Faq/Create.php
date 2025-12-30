<?php

namespace App\Livewire\Backend\Admin\Faq;


use App\Enums\ActiveInactive;
use App\Livewire\Forms\FaqForm;
use App\Models\Admin;
use App\Services\FaqService;
use App\Services\Faq\service;
use App\Traits\Livewire\WithNotification;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads, WithNotification;

    public FaqForm $form;

    protected FaqService $service;

    public function boot(FaqService $service)
    {
        $this->service = $service;
    }

    public function render()
    {
        return view('livewire.backend.admin.faq.create', [
            'statuses' => ActiveInactive::options(),
        ]);
    }
    public function save()
    {
        $validated = $this->form->validate();
        try {
            $validated['creater_by'] = Admin::class;
            $this->service->createData($validated, admin()->id);

            $this->dispatch('FaqCreated');
            $this->success('Data created successfully');
            return $this->redirect(route('admin.faq.index'), navigate: true);
        } catch (\Exception $e) {
            Log::error('Failed to create faq: ' . $e->getMessage());
            $this->error('Failed to create faq.');
        }
    }

    public function resetForm(): void
    {
        $this->form->reset();
    }
}
