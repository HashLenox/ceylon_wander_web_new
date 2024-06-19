<?php

namespace App\Livewire;

use Livewire\Component;

class FeedPost extends Component
{
    public $feed;

    // The mount method is called when the component is initialized
    public function mount($feed)
    {
        $this->feed = $feed;
    }
    public function render()
    {
        return view('livewire.feed-post');
    }
}
