<?php

namespace App\Livewire\Frontend;

use App\Models\Pdf;
use App\Services\PdfService;
use Livewire\Component;

class MethodReader extends Component
{
    public Pdf $pdf;

    protected PdfService $service;

    public function boot(PdfService $service)
    {
        $this->service = $service;
    }

    public function mount($pdf_id): void
    {
        $this->pdf = $this->service->findData($pdf_id);
    }
    public function render()
    {
        return view('livewire.frontend.method-reader');
    }
}
