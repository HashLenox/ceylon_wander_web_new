<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function roomtype()
    {
        return $this->belongsTo(RoomType::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    
}
