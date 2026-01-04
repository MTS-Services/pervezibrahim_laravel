<?php

namespace App\Livewire\Frontend;

use App\Enums\PdfPage;
use Livewire\Component;
use App\Services\PdfService;

class ContactUs extends Component
{

    protected PdfService $service;

    public function boot(PdfService $service)
    {
        $this->service = $service;
    }
    public function render()
    {
        $pdfs = $this->service->getAllData()->pdfPage(PdfPage::CONTACT_US)->active()->notFeatured()->paginate(10);
        $featuredPdfs = $this->service->getAllData()->pdfPage(PdfPage::CONTACT_US)->active()->featured()->paginate(2);
        return view('livewire.frontend.contact-us',[
            'pdfs' => $pdfs,
            'featuredPdfs' => $featuredPdfs
        ]);
    }
}
