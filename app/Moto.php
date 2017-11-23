<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moto extends Model
{
    protected $fillable = [
        'name', 
        'engine',
        'drive_train',
        'frame',
        'suspension',
        'brakes',
        'dimensions',
        'category_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\User');
    }
}
