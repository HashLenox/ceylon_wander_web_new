<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function addReview(Request $request)
    {
        //dd($request);

        $request->validate([
            'review' => 'required|min:2',
            'images.*' => 'required',
        ]);

        // Initialize an empty array to store image paths
        $imagePaths = [];

        // Check if images are uploaded
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Store the image in storage/public/feed and get its path
                $path = $image->store('public/feed');

                // Extract the file name
                $filename = basename($path);

                // Add the file name to the image paths array
                $imagePaths[] = $filename;
            }
        }

        Review::create([
            'review' => $request->review,
            'images' => $imagePaths,
            'status' => true,
            'user_id' => Auth::id(),
            'location_id' => $request->id,
        ]);

        return redirect()->back()->with('success', 'Review added successfully!');
    }
}
