<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'image', 
        'moto_id', 
    ];

    public function moto()
    {
        return $this->belongsTo('App\Moto');
    }
}
