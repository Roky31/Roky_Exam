<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'city_id',
        'name',
        'address',
        'phone',
        'email',
        'star' ,
    ];

        public function cities(){
        return $this->belongsTo(City::class);
    }
        public function rooms(){
        return $this->hasMany( Room::class);
    }
}
