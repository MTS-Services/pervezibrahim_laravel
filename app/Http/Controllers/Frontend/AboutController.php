<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    protected $masterView = 'frontend.pages.about';

    public function index()
    {
        return view($this->masterView);
    }
}
