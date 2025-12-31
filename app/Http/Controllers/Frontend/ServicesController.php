<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    protected $masterView = 'frontend.pages.services';

    public function index()
    {
        return view($this->masterView);
    }
}
