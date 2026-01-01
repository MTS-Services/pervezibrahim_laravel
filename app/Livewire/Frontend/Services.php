<?php

namespace App\Livewire\Frontend;

use App\Enums\ActiveInactive;
use App\Enums\Page;
use App\Services\VideoService;
use Livewire\Component;
use Livewire\WithPagination;

class Services extends Component
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
            filters: $this->getFilters()
        );
        return view(
            'livewire.frontend.services',
            [
                'videos' => $videos,
            ]
        );
    }

    protected function getFilters(): array
    {
        return [
            'status' => ActiveInactive::ACTIVE->value,
            'page' => Page::GALLERY->value,
        ];
    }
}
