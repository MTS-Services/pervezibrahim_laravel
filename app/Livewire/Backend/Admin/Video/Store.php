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

    protected VideoService $service;

    public function boot(VideoService $service)
    {
        $this->service = $service;
    }
    public function mount(Video $model): void
    {
        $this->model = $model;
        // $this->form->setData($model);
    }

    public function render()
    {
        return view('livewire.backend.admin.video.store', [
            'statuses' => ActiveInactive::options(),
            'pages' => Page::options(),
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
            return $this->redirect(route('admin.video.home-banner'), navigate: true);
        } catch (\Exception $e) {
            Log::error('Failed to create video: ' . $e->getMessage());
            $this->error('Failed to create video.');
        }
    }

    public function resetForm(): void
    {
        $this->form->reset();
    }

    #[On('video-form-open')]
    public function openVideoForm(?string  $videoId = null): void
    {
        if ($videoId) {
            $this->videoFormOpen = true;
            $this->isLoading = false;
        } else {
            $this->isLoading = false;
        }
    }
}
