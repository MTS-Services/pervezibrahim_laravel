<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\BannerVideo;

class Home extends Component
{

    public function render()
    {
        $video = BannerVideo::first();
        return view('livewire.frontend.home', [
            'video' => $video,
        ]);
    }
}
