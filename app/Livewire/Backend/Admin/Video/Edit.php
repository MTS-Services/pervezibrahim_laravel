<?php

namespace App\Livewire\Backend\Admin\Video;

use App\Enums\ActiveInactive;
use App\Livewire\Forms\VideoForm;
use App\Models\Admin;
use App\Models\Video;
use App\Services\VideoService;
use App\Traits\Livewire\WithNotification;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads, WithNotification;

    public VideoForm $form;
    public Video $model;

    protected VideoService $service;

    public function boot(VideoService $service)
    {
        $this->service = $service;
    }

    public function mount(Video $model): void
    {
        $this->model = $model;
        $this->form->setData($model);
    }

    public function render()
    {
        return view('livewire.backend.admin.video.edit', [
            'statuses' => ActiveInactive::options(),
        ]);
    }

    public function save()
    {
        $validated = $this->form->validate();
        try {
            $validated['updater_by'] = Admin::class;
            $this->service->updateData($this->model->id, $validated);

            $this->dispatch('VideoUpdated');
            $this->success('Data updated successfully');
            return $this->redirect(route('admin.video.index'), navigate: true);
        } catch (\Throwable $e) {
            Log::error('Failed to update video', [
                'video_id' => $this->model->id,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            $this->error('Failed to update video.');
        }
    }

    public function resetForm(): void
    {
        $this->form->reset();
        $this->form->setData($this->model);
    }
}
