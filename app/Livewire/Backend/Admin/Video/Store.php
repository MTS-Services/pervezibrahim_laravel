<?php

namespace App\Livewire\Backend\Admin\Video;


use App\Enums\ActiveInactive;
use App\Enums\Page;
use App\Livewire\Forms\VideoForm;
use App\Models\Admin;
use App\Models\Video;
use App\Services\VideoService;
use App\Services\Video\service;
use App\Traits\Livewire\WithNotification;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class Store extends Component
{
    use WithNotification, WithFileUploads;

    public VideoForm $form;
    public Video $model;

    public $videoFormOpen = false;
    public $isLoading = true;
    public $editMode = false;
    public $page;
    public $videoId;

    public $existingThumbnail = [];
    public $existingFile = [];

    protected VideoService $service;

    public function boot(VideoService $service)
    {
        $this->service = $service;
    }
    public function mount(): void
    {
        if ($this->videoId) {
            $this->model = Video::findOrFail($this->videoId);
            $this->form->setData($this->model);
            $this->existingThumbnail = $this->model?->thumbnail;
            $this->existingFile = $this->model?->file;
        }
    }

    public function updated($propertyName)
    {
        $this->form->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.backend.admin.video.store', [
            'statuses' => ActiveInactive::options()
        ]);
    }
    public function save()
    {
        $validated = $this->form->validate();
        try {
            $validated['page'] = $this->page;
            $validated['creater_by'] = Admin::class;
            $this->service->createData($validated, admin()->id);

            $this->dispatch('VideoCreated');
            $this->success('Data created successfully');

            $this->resetForm();
            $this->reset([
                'videoFormOpen',
                'isLoading',
                'page',
            ]);
            return redirect(url()->previous());
        } catch (\Exception $e) {
            Log::error('Failed to create video: ' . $e->getMessage());
            $this->error('Failed to create video.');
        }
    }
    public function update()
    {
        $validated = $this->form->validate();
        try {
            $validated['updater_by'] = Admin::class;
            $this->service->updateData($this->model->id, $validated);

            $this->dispatch('VideoUpdated');
            $this->success('Data updated successfully');
            $this->reset([
                'editMode',
                'existingThumbnail',
                'existingFile',
            ]);
            $this->resetForm();
            $this->reset([
                'videoFormOpen',
                'isLoading',
                'page',
            ]);
            return redirect()->back();
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
        $this->form->reset(
            'videoFormOpen',
            'isLoading',
            'editMode',
            'existingThumbnail',
            'existingFile',
            'page'
        );
    }

    #[On('video-form-open')]
    public function openVideoForm(?string $page = null, ?string $videoId = null): void
    {
        $this->page = $page;
        if ($videoId) {
            $this->videoFormOpen = true;
            $this->isLoading = false;
            $this->editMode = true;
            $this->formData($videoId);
        } else {
            $this->isLoading = false;
        }
    }

    public function formData($videoId)
    {
        $this->model = $this->service->findData($videoId);
        $this->form->setData($this->model);
        $this->existingThumbnail = $this->model->thumbnail;
        $this->existingFile = $this->model->file;
    }
}
