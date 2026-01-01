<?php

namespace App\Livewire\Frontend;

use App\Enums\Page;
use Livewire\Component;
use Livewire\WithPagination;
use App\Services\VideoService;

class Gallery extends Component
{
    use WithPagination;

    protected VideoService $videoService;

    public function boot(VideoService $videoService)
    {
        $this->videoService = $videoService;
    }

    public function render()
    {
        $videos = $this->videoService->getPaginatedData(
            perPage: 10,
            filters: ['page' => Page::GALLERY->value]
        );
        return view('livewire.frontend.gallery', [
            'videos' => $videos,
        ]);
    }
}
