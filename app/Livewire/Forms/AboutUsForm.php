<?php

namespace App\Livewire\Forms;

use Illuminate\Http\UploadedFile;
use Livewire\Attributes\Locked;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\Form;

class AboutUsForm extends Form
{
    use WithFileUploads;

    #[Locked]
    public ?int $id = null;

    public string $description = '';
    public ?UploadedFile $file_one = null;
    public ?UploadedFile $thumbnail_one = null;
    public ?UploadedFile $file_two = null;
    public ?UploadedFile $thumbnail_two = null;

    public function rules(): array
    {
        return [
            'thumbnail_one' => 'nullable|image',
            'file_one' => 'nullable|file',
            'thumbnail_two' => 'nullable|image',
            'file_two' => 'nullable|file',
            'description' => 'required|string',
        ];
    }

    public function setData($video): void
    {
        $this->id = $video->id;
        $this->description = $video->description;
    }

    public function reset(...$properties): void
    {
        $this->id = null;
        $this->thumbnail_one = null;
        $this->file_one = null;
        $this->thumbnail_two = null;
        $this->file_two = null;
        $this->description = '';
        $this->resetValidation();
    }

    protected function isUpdating(): bool
    {
        return !empty($this->id);
    }
}
