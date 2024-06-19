<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function feed()
    {
        $reviews = Review::orderBy('created_at', 'desc')->get();
        return view('user.feed', ['reviews' => $reviews]);
    }
}
