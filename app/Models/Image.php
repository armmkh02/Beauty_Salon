<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Image extends Model
{
    protected $fillable = [

        'name' ,
        'path' ,

    ];

}