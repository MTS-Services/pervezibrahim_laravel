<?php

namespace App\Livewire\Forms;

use App\Enums\ActiveInactive;
use Illuminate\Http\UploadedFile;
use Livewire\Attributes\Locked;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\Form;

class VideoForm extends Form
{
    use WithFileUploads;

    #[Locked]
    public ?int $id = null;

    public string $page = '';
    public string $title = '';
    public ?string $description = null;
    public ?string $action = null;
    public string $status = ActiveInactive::ACTIVE->value;
    public ?UploadedFile $file = null;
    public ?UploadedFile $thumbnail = null;

    public function rules(): array
    {
        return [
            'page' => 'nullable|string|max:255',
            'thumbnail' => 'nullable|image',
            'file' => 'nullable|file',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'action' => 'nullable|string|max:255',
            'status' => 'required|string|in:' . implode(',', array_column(ActiveInactive::cases(), 'value')),
        ];
    }

    public function setData($admin): void
    {
        $this->id = $admin->id;
        $this->page = $admin->page;
        $this->thumbnail = $admin->thumbnail;
        $this->file = $admin->file;
        $this->title = $admin->title;
        $this->description = $admin->description;
        $this->action = $admin->action;
        $this->status = $admin->status->value;
    }

    public function reset(...$properties): void
    {
        $this->id = null;
        $this->page = '';
        $this->thumbnail = null;
        $this->file = null;
        $this->title = '';
        $this->description = null;
        $this->action = null;
        $this->status = ActiveInactive::ACTIVE->value;
        $this->resetValidation();
    }

    protected function isUpdating(): bool
    {
        return !empty($this->id);
    }
}
