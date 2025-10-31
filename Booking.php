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
        'user_id',
        'check_in_at',
        'check_in_out',
    ];

        public function room(){
        return $this->belongsTo( Room::class);
    }
    }
