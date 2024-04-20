<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function feed()
    {
        return view('user.feed');
    }
    public function travel()
    {
        return view('user.travel');
    }

    public function restaurant()
    {
        return view('user.restaurant');
    }

    public function hotel()
    {
        return view('user.hotel');
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function setting()
    {
        return view('user.setting');
    }

}
