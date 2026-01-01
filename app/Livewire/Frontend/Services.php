<?php

namespace App\Livewire\Frontend;

use App\Services\VideoService;
use Livewire\Component;
use Livewire\WithPagination;

class Services extends Component
{
    use WithPagination;
    
    public $videos = [];

    protected VideoService $videoService;

    public function boot(VideoService $videoService)
    {
        $this->videoService = $videoService;
    }

    public function mount()
    {
        $this->videos = $this->videoService->getAllDatas();
    }
    public function render()
    {
        return view(
            'livewire.frontend.services',
            [
                'videos' => $this->videos,
            ]
        );
    }
}
