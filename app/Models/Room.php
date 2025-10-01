<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
   use HasFactory;


   protected $guarded = [
        'id'
    ];

    protected $fillable = [
    "hotel_id",
    'room_number',
    'type',
    'per_night_price',
    'is_available',
    ];
       public function booking(){
        return $this->hasMany(Booking::class);
    }
}
