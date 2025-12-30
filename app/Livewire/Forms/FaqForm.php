<?php

namespace App\Livewire\Forms;

use App\Enums\ActiveInactive;
use Livewire\Attributes\Locked;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\Form;

class FaqForm extends Form
{
    use WithFileUploads;

    #[Locked]
    public ?int $id = null;

    public string $question = '';
    public string $answer = '';
    public string $status = ActiveInactive::ACTIVE->value;

    public function rules(): array
    {
        return [

            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'status' => 'required|string|in:' . implode(',', array_column(ActiveInactive::cases(), 'value')),
        ];
    }
    
    public function setData($faq): void
    {
        $this->id = $faq->id;
        $this->question = $faq->question;
        $this->answer = $faq->answer;
        $this->status = $faq->status->value;
    }

    public function reset(...$properties): void
    {
        $this->id = null;
        $this->question = '';
        $this->answer = '';
        $this->status = ActiveInactive::ACTIVE->value;
        $this->resetValidation();
    }

    protected function isUpdating(): bool
    {
        return !empty($this->id);
    }
}
