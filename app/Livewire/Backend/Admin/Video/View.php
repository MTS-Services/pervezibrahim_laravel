<?php

namespace App\Livewire\Backend\Admin\Video;

use App\Models\Video;
use Livewire\Component;

class View extends Component
{
    public Video $model;
    public function mount(Video $model): void
    {
        $this->model = $model;
    }
}
