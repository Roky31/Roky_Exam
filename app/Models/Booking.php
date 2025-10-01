<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'room_id',
        'guest_id',
        'check_in_at',
        'check_in_out',
    ];

    public function city(){
        return $this->belongsTo(City::class);
    }
        public function hotel(){
        return $this->belongsTo(Hotel::class);
    }
        public function room(){
        return $this->belongsTo( Room::class);
    }
        public function guest(){
        return $this->belongsTo( Guest::class);
    }
}
