<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\TikTokVideo;
use App\Services\TikTokService;
use App\Services\BannerVideoService;
use App\Services\KeywordService;
use Illuminate\Support\Facades\Log;

class Home extends Component
{
      public function render()
    {
        

        return view('livewire.frontend.home');
    }
}
