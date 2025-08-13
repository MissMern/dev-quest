<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destinations extends Model
{
    //
    protected $fillable = [
        'title',
        'desc',
        'image',
        'country',
        'city',

    ];
}
