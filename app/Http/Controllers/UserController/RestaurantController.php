<?php

namespace App\Http\Controllers\UserController;

use App\Enums\LocationType;
use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function restaurant()
    {
        $locations = Location::where('type', LocationType::Restaurant->value)->paginate(10);
        return view('user.restaurant', ['locations' => $locations]);
    }

    public function singleRestaurant($id)
    {
        $restaurant = Location::where('id', $id)->first();
        return view('user.single.single-restaurant', ['restaurant' => $restaurant]);
    }
}
