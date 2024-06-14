<?php

namespace App\Livewire;

use App\Models\Room;
use Livewire\Component;

class RoomReservation extends Component
{
    public $hotelID;

    public function mount($hotelID = null)
    {
        $this->hotelID = $hotelID;
    }



    public function render()
    {
        $rooms = Room::where('location_id', $this->hotelID)->Get();
        return view('livewire.room-reservation', ['rooms' => $rooms]);
    }
}
