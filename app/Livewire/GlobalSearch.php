<?php

namespace App\Livewire;

use App\Models\Location;
use Livewire\Component;

class GlobalSearch extends Component
{
    public $search;

    public function render()
    {
        $locations = [];

        // Check if the search input is not empty
        if (!empty($this->search)) {
            // Perform the search if the search input is not empty
            $locations = Location::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('address', 'like', '%' . $this->search . '%')
                ->get();
        }

        return view('livewire.global-search', ['locations' => $locations]);
    }
}
