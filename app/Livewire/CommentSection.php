<?php

namespace App\Livewire;

use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class CommentSection extends Component
{
    use WithFileUploads;
    public $id;

    public $imageCount = 0;

    public $title = "Test";
    public $review;
    public $rating;

    public $images = [];

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
            //'images.*' => 'image|max:1024',
        ];
    }

    public function removeImages()
    {
        // Check if there are any images to delete need to fix not working
        if (!empty($this->images)) {
            foreach ($this->images as $image) {
                // Delete the image from the temporary folder
                Storage::disk('public')->delete('livewire-tmp/' . $image);
            }
        }

        // Reset the images array and image count
        $this->images = [];
        $this->imageCount = 0;
    }

    public function submit()
    {
        $this->validate();

        $imagePaths = [];
        foreach ($this->images as $image) {
            $imagePaths[] = $image->store('feed', 'public');
        }

        $comment = Review::create([
            'title' => $this->title,
            'review' => $this->review,
            'rating' => $this->rating,
            'images' => $imagePaths,
            'status' => true,
            'user_id' => Auth::id(),
            'location_id' => $this->hotelID,
        ]);

        $this->images = [];
        $this->imageCount = 0;
        $this->review = null;

    }

    public function render()
    {
        if ($this->images) {
            foreach ($this->images as $image) {
                $this->imageCount++;
            }
        }
        $comments = Review::where('location_id', $this->hotelID)->orderBy('created_at', 'desc')->get();
        return view('livewire.comment-section', ['comments' => $comments]);
    }
}
