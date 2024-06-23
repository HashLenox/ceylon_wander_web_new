<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('user.profile.profile');
    }

    public function profileOther($id)
    {
        $user = User::findOrFail($id);
        return view('user.profile.profile');
    }

    public function setting()
    {
        return view('user.setting');
    }
}
