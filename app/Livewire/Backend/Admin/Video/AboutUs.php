<?php

namespace App\Livewire\Backend\Admin\Video;

use Livewire\Component;
use App\Livewire\Forms\AboutUsForm;
use App\Models\AboutUs as ModelsAboutUs;
use Livewire\WithFileUploads;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use App\Traits\Livewire\WithDataTable;
use Illuminate\Support\Facades\Storage;
use App\Traits\Livewire\WithNotification;

class AboutUs extends Component
{
    use WithDataTable, WithNotification, WithFileUploads;

    public $statusFilter = '';
    public $showDeleteModal = false;
    public $deleteId = null;
    public $bulkAction = '';
    public $showBulkActionModal = false;

    public $existingThumbnailOne;
    public $existingThumbnailTwo;
    public $existingFileOne;
    public $existingFileTwo;

    public AboutUsForm $form;

    protected $listeners = ['userCreated' => '$refresh', 'userUpdated' => '$refresh'];

    public function mount()
    {
        $model = ModelsAboutUs::first();
        $this->form->setData($model);
        $this->existingThumbnailOne = $model?->thumbnail_one;
        $this->existingFileOne = $model?->file_one;
        $this->existingThumbnailTwo = $model?->thumbnail_two;
        $this->existingFileTwo = $model?->file_two;
    }

    public function updated($propertyName)
    {
        $this->form->validateOnly($propertyName);
    }

    public function save()
    {
        $validated = $this->form->validate();

        try {
            $about = ModelsAboutUs::first();
            $newData = $validated;

            /**
             * ==================================
             * THUMBNAIL ONE
             * ==================================
             */
            if ($this->form->thumbnail_one instanceof UploadedFile) {
                if ($about?->thumbnail_one && Storage::disk('public')->exists($about->thumbnail_one)) {
                    Storage::disk('public')->delete($about->thumbnail_one);
                }

                $newData['thumbnail_one'] = $this->form->thumbnail_one
                    ->store('thumbnails', 'public');
            } elseif ($about) {
                unset($newData['thumbnail_one']); // keep old
            }

            /**
             * ==================================
             * FILE ONE
             * ==================================
             */
            if ($this->form->file_one instanceof UploadedFile) {
                if ($about?->file_one && Storage::disk('public')->exists($about->file_one)) {
                    Storage::disk('public')->delete($about->file_one);
                }

                $newData['file_one'] = $this->form->file_one
                    ->store('videos', 'public');
            } elseif ($about) {
                unset($newData['file_one']); // keep old
            }

            /**
             * ==================================
             * THUMBNAIL TWO
             * ==================================
             */
            if ($this->form->thumbnail_two instanceof UploadedFile) {
                if ($about?->thumbnail_two && Storage::disk('public')->exists($about->thumbnail_two)) {
                    Storage::disk('public')->delete($about->thumbnail_two);
                }

                $newData['thumbnail_two'] = $this->form->thumbnail_two
                    ->store('thumbnails', 'public');
            } elseif ($about) {
                unset($newData['thumbnail_two']); // keep old
            }

            /**
             * ==================================
             * FILE TWO
             * ==================================
             */
            if ($this->form->file_two instanceof UploadedFile) {
                if ($about?->file_two && Storage::disk('public')->exists($about->file_two)) {
                    Storage::disk('public')->delete($about->file_two);
                }

                $newData['file_two'] = $this->form->file_two
                    ->store('videos', 'public');
            } elseif ($about) {
                unset($newData['file_two']); // keep old
            }

            /**
             * ==================================
             * SAVE / UPDATE
             * ==================================
             */
            $newData['created_by'] = admin()->id;

            if ($about) {
                $about->update($newData);
            } else {
                ModelsAboutUs::create($newData);
            }

            $this->success('About Us content updated successfully.');
            return redirect()->route('admin.video.about-us');
        } catch (\Exception $e) {
            Log::error('About Us Update Error', [
                'message' => $e->getMessage(),
                'trace'   => $e->getTraceAsString(),
            ]);

            $this->error('About Us update failed. Please try again.');
        }
    }



    public function render()
    {

        return view('livewire.backend.admin.video.about-us');
    }
}
