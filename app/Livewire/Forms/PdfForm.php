<?php

namespace App\Livewire\Forms;

use App\Enums\ActiveInactive;
use Illuminate\Http\UploadedFile;
use Livewire\Attributes\Locked;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\Form;

class PdfForm extends Form
{
    use WithFileUploads;

    #[Locked]
    public ?int $id = null;

    public string $page = '';
    public string $title = '';
    public ?string $description = null;
    public ?string $action = null;
    public string $status = ActiveInactive::ACTIVE->value;
    public bool $is_featured = false;
    public ?UploadedFile $file = null;
    public ?UploadedFile $cover_image = null;

    public function rules(): array
    {
        return [
            'page' => 'nullable|string|max:255',
            'cover_image' => 'nullable|image',
            'file' => 'nullable|file',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'action' => 'nullable|string|max:255',
            'status' => 'required|string|in:' . implode(',', array_column(ActiveInactive::cases(), 'value')),
            'is_featured' => 'nullable|boolean',
        ];
    }

    public function setData($pdf): void
    {
        $this->id = $pdf->id;
        $this->page = $pdf->page->value;
        $this->title = $pdf->title;
        $this->description = $pdf->description;
        $this->action = $pdf->action;
        $this->status = $pdf->status->value;
        $this->is_featured = $pdf->is_featured;
    }

    public function reset(...$properties): void
    {
        $this->id = null;
        $this->page = '';
        $this->cover_image = null;
        $this->file = null;
        $this->title = '';
        $this->description = null;
        $this->action = null;
        $this->status = ActiveInactive::ACTIVE->value;
        $this->is_featured = false;
        $this->resetValidation();
    }

    protected function isUpdating(): bool
    {
        return !empty($this->id);
    }
}
