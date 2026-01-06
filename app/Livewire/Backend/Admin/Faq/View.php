<?php

namespace App\Livewire\Backend\Admin\Faq;

use App\Models\Faq;
use Livewire\Component;

class View extends Component
{
    public Faq $model;

    public function mount(Faq $model): void
    {
        $this->model = $model;
    }
}
