<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function cities(){
        return $this->belongsTo(City::class);
    }
        public function hotels(){
        return $this->belongsTo(Hotel::class);
    }
        public function rooms(){
        return $this->belongsTo( Room::class);
    }
        public function guests(){
        return $this->belongsTo( Guest::class);
    }
}
