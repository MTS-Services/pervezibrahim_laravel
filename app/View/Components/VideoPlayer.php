<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VideoPlayer extends Component
{
    public $video;
    /**
     * Create a new component instance.
     */
    public function __construct($video = null)
    {
        $this->video = $video;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.video-player');
    }
}
