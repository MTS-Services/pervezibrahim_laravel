<?php

namespace App\Livewire\Backend\Admin\Pdf;

use App\Models\Pdf;
use Livewire\Component;

class View extends Component
{
    public Pdf $model;
    public function mount(Pdf $model): void
    {
        $this->model = $model;
    }
}
