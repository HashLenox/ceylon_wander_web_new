<?php

namespace App\Livewire;

use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CommentSection extends Component
{
    public $id;

    public $title = "Test";
    public $review;
    public $rating;
    public $security;
    public $service;

    public $hotelID;

    // The mount method is called when the component is initialized
    public function mount($hotelID)
    {
        $this->hotelID = $hotelID;
    }

    public function rules()
    {
        return [
            'review' => 'required|min:5',
        ];
    }

    public function submit()
    {
        $this->validate();

        $comment = Review::create([
            'title' => $this->title,
            'review' => $this->review,
            'rating' => $this->rating,
            'views' => 1,
            'status' => true,
            'user_id' => Auth::id(),
            'location_id' => $this->hotelID,
        ]);

        $this->review = null;

    }

    public function render()
    {
        $comments = Review::where('location_id', $this->hotelID)->get();
        return view('livewire.comment-section', ['comments' => $comments]);
    }
}
