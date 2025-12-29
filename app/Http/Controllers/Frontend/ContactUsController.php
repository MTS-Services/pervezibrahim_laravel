<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    protected $masterView = 'frontend.pages.contact-us';

    public function index()
    {
        return view($this->masterView);
    }
}
