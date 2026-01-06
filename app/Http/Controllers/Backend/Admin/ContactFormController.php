<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;

class ContactFormController extends Controller
{
    protected $masterView = 'backend.admin.pages.contact-form';

    public function __construct()
    {
        // $this->middleware('auth:admin');
    }

    public function index()
    {
        return view($this->masterView);
    }

    public function view($id)
    {
        $contact = ContactForm::findOrFail(decrypt($id));

        if (! $contact) {
            return abort(404);
        }

        return view($this->masterView, [
            'data' => $contact,
        ]);
    }
}
