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
    public function hotels(){

        return $this->hasMany(Hotel::class);
    }
}
