<?php

namespace App\Livewire\Backend\Admin\Video;


use App\Enums\ActiveInactive;
use App\Livewire\Forms\VideoForm;
use App\Models\Admin;
use App\Services\VideoService;
use App\Services\Video\service;
use App\Traits\Livewire\WithNotification;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithNotification, WithFileUploads;

    public VideoForm $form;

    protected VideoService $service;

    public function boot(VideoService $service)
    {
        $this->service = $service;
    }

    public function render()
    {
        return view('livewire.backend.admin.video.create', [
            'statuses' => ActiveInactive::options(),
        ]);
    }
    public function save()
    {
        $validated = $this->form->validate();
        try {
            $validated['creater_by'] = Admin::class;
            $this->service->createData($validated, admin()->id);

            $this->dispatch('VideoCreated');
            $this->success('Data created successfully');
            return $this->redirect(route('admin.video.index'), navigate: true);
        } catch (\Exception $e) {
            Log::error('Failed to create video: ' . $e->getMessage());
            $this->error('Failed to create video.');
        }
    }

    public function resetForm(): void
    {
        $this->form->reset();
    }
}
