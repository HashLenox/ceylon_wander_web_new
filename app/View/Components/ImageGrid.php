<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ImageGrid extends Component
{
    public $images;
    public $main;



    /**
     * Create a new component instance.
     *
     * @param $images The schedule data
     */
    public function __construct($images, $main)
    {
        $this->images = $images;
        $this->main = $main;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.image-grid');
    }
}
