<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class MethodController extends Controller
{
     protected $masterView = 'frontend.pages.method';

    public function index()
    {
        return view($this->masterView);
    }
}
