<?php

namespace App\Livewire\Frontend;

use App\Services\FaqService;
use Livewire\Component;

class FAQ extends Component
{
    public $faqs;

    protected FaqService $service;

    public function boot(FaqService $service)
    {
        $this->service = $service;
    }
    public function mount()
    {
    }
    public function render()
    {
        $this->faqs = $this->service->getActiveData();
        return view('livewire.frontend.f-a-q', [
            'faqs' => $this->faqs,
        ]);
    }
}
