<?php

namespace App\Http\Controllers\UserController;

use App\Enums\LocationType;
use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    public function hotel()
    {
        $locations = Location::where('type', LocationType::Accommodation->value)->paginate(10);
        return view('user.hotel', ['locations' => $locations]);
    }
}
