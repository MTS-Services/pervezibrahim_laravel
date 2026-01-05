<?php

namespace App\Livewire\Frontend;

use App\Livewire\Forms\ContactForm as ContactValidationFom;
use App\Enums\PdfPage;
use App\Models\ContactForm;
use Livewire\Component;
use App\Services\PdfService;
use App\Traits\Livewire\WithNotification;

class ContactUs extends Component
{
    use WithNotification;

    public ContactValidationFom $form;

    protected PdfService $service;

    public function boot(PdfService $service)
    {
        $this->service = $service;
    }
    public function mount()
    {
        // 
    }

    public function submit()
    {
        $valided = $this->form->validate();
        try {
            ContactForm::create($valided);
            $this->form->reset();
            $this->success('Your message has been sent successfully');
        } catch (\Throwable $th) {
            $this->error('Failed to send message');
        }
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
