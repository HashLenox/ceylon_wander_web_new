<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('user.profile');
    }

    public function setting()
    {
        return view('user.setting');
    }

}
