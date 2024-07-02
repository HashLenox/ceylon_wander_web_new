<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        $reviews = Review::where('user_id', Auth::id())->get();
        return view('user.profile.profile', ['reviews' => $reviews]);
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
