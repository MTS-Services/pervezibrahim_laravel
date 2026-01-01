<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Services\VideoService;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    protected $masterView = 'backend.admin.pages.video';

    public function __construct(protected VideoService $service) {}
    /**
     * Show the list of resources.
     */
    public function homeBanner()
    {
        return view($this->masterView);
    }
    public function aboutUs()
    {
        return view($this->masterView);
    }
    public function aboutUsGallery()
    {
        return view($this->masterView);
    }
    public function service()
    {
        return view($this->masterView);
    }
    public function gallery()
    {
        return view($this->masterView);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->masterView);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $encryptedId)
    {
        $data = $this->service->findData(decrypt($encryptedId));
        if (!$data) {
            abort(404);
        }
        return view($this->masterView, [
            'data' => $data
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function view(string $encryptedId)
    {
        $data = $this->service->findData(decrypt($encryptedId));
        if (!$data) {
            abort(404);
        }
        return view($this->masterView, [
            'data' => $data
        ]);
    }

    /**
     * Display the trashed resource.
     */
    public function trash()
    {
        return view($this->masterView);
    }
}
