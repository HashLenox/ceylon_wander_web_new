<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    public function foodCategory()
    {
        return $this->belongsTo(FoodCategory::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
