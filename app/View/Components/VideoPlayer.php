<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class VideoPlayer extends Component
{
    public function __construct(
        public mixed $video = null,
        public ?string $thumbnail = null,
        public ?string $file = null,
        public $class = null
    ) {
        // If a video model is passed, try to get attributes
        $this->thumbnail = $thumbnail ?? ($video->thumbnail_path ?? '');
        $this->file = $file ?? ($video->file_path ?? '');
        
    }

    public function render(): View
    {
        return view('components.video-player');
    }
}