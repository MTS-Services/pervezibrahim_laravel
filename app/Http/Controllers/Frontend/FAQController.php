<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FAQController extends Controller
{
    protected $masterView = 'frontend.pages.faq';

    public function index()
    {
        return view($this->masterView);
    }
}
