<?php

namespace App\Livewire\Frontend;

use App\Enums\PdfPage;
use Livewire\Component;
use App\Services\PdfService;

class Method extends Component
{

    protected PdfService $service;

    public function boot(PdfService $service)
    {
        $this->service = $service;
    }
    public function render()
    {
        $pdfs = $this->service->getAllData()->pdfPage(PdfPage::METHOD)->active()->notFeatured()->paginate(10);
        return view('livewire.frontend.method', [
            'pdfs' => $pdfs,
        ]);
    }
}
