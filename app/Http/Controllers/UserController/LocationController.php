<?php

namespace App\Http\Controllers\UserController;

use App\Enums\LocationType;
use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function travel()
    {
        $locations = Location::where('type', LocationType::Travel->value)->paginate(10);
        return view('user.travel', ['locations' => $locations]);
    }
}
