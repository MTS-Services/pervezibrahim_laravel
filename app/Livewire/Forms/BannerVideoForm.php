<?php

namespace App\Livewire\Forms;

use Illuminate\Http\UploadedFile;
use Livewire\Attributes\Locked;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\Form;

class BannerVideoForm extends Form
{
    use WithFileUploads;

    #[Locked]
    public ?int $id = null;

    public string $title = '';
    public ?string $action = null;
    public ?UploadedFile $file = null;
    public ?UploadedFile $thumbnail = null;

    public ?UploadedFile $footer_file = null;
    public ?UploadedFile $footer_thumbnail = null;

    public function rules(): array
    {
        return [
            'thumbnail' => 'nullable|image',
            'file' => 'nullable|file',
            'title' => 'nullable|string|max:255',
            'action' => 'nullable|string|max:255',

            'footer_thumbnail' => 'nullable|image',
            'footer_file' => 'nullable|file',
        ];
    }

    public function setData($video): void
    {
        $this->id = $video->id;
        $this->title = $video->title;
        $this->action = $video->action;
    }

    public function reset(...$properties): void
    {
        $this->id = null;
        $this->thumbnail = null;
        $this->file = null;
        $this->title = '';
        $this->action = null;
        $this->footer_thumbnail = null;
        $this->footer_file = null;
        $this->resetValidation();
    }

    protected function isUpdating(): bool
    {
        return !empty($this->id);
    }
}
