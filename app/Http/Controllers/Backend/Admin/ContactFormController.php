<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;

class ContactFormController extends Controller
{
    protected $masterView = 'backend.admin.pages.contact-form';

    public function __construct()
    {
        // 
    }
    public function index()
    {
        return view($this->masterView);
    }

    public function view()
    {
        return view($this->masterView);
    }
}
