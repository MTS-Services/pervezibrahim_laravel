<?php

namespace App\Livewire\Frontend;

use App\Enums\ActiveInactive;
use App\Enums\Page;
use App\Services\VideoService;
use Livewire\Component;

class About extends Component
{
    protected VideoService $videoService;

    public function boot(VideoService $videoService)
    {
        $this->videoService = $videoService;
    }
    public function render()
    {
        $aboutVideos = $this->videoService->getPaginatedData(
            perPage: 2,
            filters: $this->getAboutFilters()
        );
        $galleryVideos = $this->videoService->getPaginatedData(
            perPage: 6,
            filters: $this->getAboutGalleryFilters()
        );
        return view('livewire.frontend.about',[
            'aboutVideos' => $aboutVideos,
            'galleryVideos' => $galleryVideos,
        ]);
    }

    protected function getAboutGalleryFilters(): array
    {
        return [
            'status' => ActiveInactive::ACTIVE->value,
            'page' => Page::ABOUT_GALLERY->value,
        ];
    }
    protected function getAboutFilters(): array
    {
        return [
            'status' => ActiveInactive::ACTIVE->value,
            'page' => Page::ABOUT_US->value,
        ];
    }
}
