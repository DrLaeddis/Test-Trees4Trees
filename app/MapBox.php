<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MapBox extends Model
{
    protected $fillable = [
        'polygon', 'latitude', 'longitude',
    ];
}
