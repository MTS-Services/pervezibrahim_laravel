<?php

namespace App\Livewire\Backend\Admin\ContactForm;

use App\Models\ContactForm;
use Livewire\Component;

class Contact
{
    // Define the properties and methods of the Contact class here
}

class View extends Component
{
    public ContactForm $model;

    public function mount(ContactForm $model): void
    {
        $this->model = $model;
    }

    public function render()
    {
        return view('livewire.backend.admin.contact-form.view');
    }
}
