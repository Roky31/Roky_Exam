<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'name',
    ];
    public function booking(){

        return $this->hasMany(Booking::class);
    }
}
