<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    protected $masterView = 'frontend.pages.gallery';

    public function index()
    {
        return view($this->masterView);
    }
}
