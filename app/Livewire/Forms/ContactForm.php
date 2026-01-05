<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Locked;
use Livewire\Form;

class ContactForm extends Form
{

    #[Locked]
    public ?int $id = null;

    public string $name = '';
    public string $email = '';
    public string $organization = '';
    public bool $is_receive_email = false;

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'organization' => 'required|string|max:255',
            'is_receive_email' => 'required|boolean',
        ];
    }

    public function setData($contact): void
    {
        $this->id = $contact->id;
        $this->name = $contact->name;
        $this->email = $contact->email;
        $this->organization = $contact->organization;
        $this->is_receive_email = $contact->is_receive_email;
        
    }

    public function reset(...$properties): void
    {
        $this->id = null;
        $this->name = '';
        $this->email = '';
        $this->organization = '';
        $this->is_receive_email = false;
        $this->resetValidation();
    }

    protected function isUpdating(): bool
    {
        return !empty($this->id);
    }
}
