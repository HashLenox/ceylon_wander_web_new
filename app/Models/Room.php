<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $casts = [
        'images' => 'array',
        'price' => 'array',
        'features' => 'array',
        'include' => 'array',
        'facilities' => 'array',
    ];

    public function room_type()
    {
        return $this->belongsTo(RoomType::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
