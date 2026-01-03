<?php

namespace App\Livewire\Backend\Admin\Video;

use App\Models\Admin;
use Livewire\Component;
use App\Models\BannerVideo;
use Illuminate\Support\Arr;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;
use App\Traits\Livewire\WithDataTable;
use App\Livewire\Forms\BannerVideoForm;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Traits\Livewire\WithNotification;

class HomeBanner extends Component
{
    use WithDataTable, WithNotification, WithFileUploads;

    public $statusFilter = '';
    public $showDeleteModal = false;
    public $deleteId = null;
    public $bulkAction = '';
    public $showBulkActionModal = false;

    public $existingThumbnail;
    public $existingFile;

    public BannerVideoForm $form;

    protected $listeners = ['userCreated' => '$refresh', 'userUpdated' => '$refresh'];

    public function mount()
    {
        $model = BannerVideo::first();
        $this->form->setData($model);
        $this->existingThumbnail = $model?->thumbnail;
        $this->existingFile = $model?->file;
    }

    public function save()
    {
        $validated = $this->form->validate();

        try {
            $video = BannerVideo::first();
            
            $oldData = $video->getAttributes();
            $newData = $validated;

            $oldThumbnail = Arr::get($oldData, 'thumbnail');
            $thumbnail = Arr::get($newData, 'thumbnail');

            if ($thumbnail instanceof UploadedFile) {
                if ($oldThumbnail && Storage::disk('public')->exists($oldThumbnail)) {
                    Storage::disk('public')->delete($oldThumbnail);
                }

                $newThumbnailPath = Storage::disk('public')
                    ->putFile('thumbnails', $thumbnail);

                $newData['thumbnail'] = $newThumbnailPath;
            } else {
                $newData['thumbnail'] = $oldThumbnail;
            }

            $oldFile = Arr::get($oldData, 'file');
            $file = Arr::get($newData, 'file');

            if ($file instanceof UploadedFile) {
                if ($oldFile && Storage::disk('public')->exists($oldFile)) {
                    Storage::disk('public')->delete($oldFile);
                }

                $newFilePath = Storage::disk('public')
                    ->putFile('videos', $file);

                $newData['file'] = $newFilePath;
            } else {
                $newData['file'] = $oldFile;
            }

            $newData['created_by'] = admin()->id;
            if ($video) {
                $video->update($newData);
            } else {
                BannerVideo::create($newData);
            }

            $this->success('Home banner updated successfully.');

            return redirect()->route('admin.video.home-banner');
        } catch (\Exception $e) {
            Log::error('Home Banner Update Error', [
                'message' => $e->getMessage(),
                'trace'   => $e->getTraceAsString(),
            ]);

            $this->error('Banner data upload failed. Please try again.');
        }
    }


    public function render()
    {

        return view('livewire.backend.admin.video.home-banner');
    }
}
