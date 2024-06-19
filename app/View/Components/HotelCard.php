<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HotelCard extends Component
{
    public $location;

    /**
     * Create a new component instance.
     *
     * @param $location The schedule data
     */
    public function __construct($location)
    {
        $this->location = $location;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hotel-card');
    }
}
