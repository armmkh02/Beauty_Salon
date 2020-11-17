<?php

namespace App\Models;

use App\User;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'firstName'  ,
        'lastName'   ,
        'email'      ,
        'phone'      ,
        'message'    ,
        'status'     ,
        'user_id'    ,
        'image_id'
    ];

    const Uncheked = 'new';
    const Cheked   = 'cheked';

    public const STATUS = [
        0 => self::Uncheked ,
        1 => self::Cheked   ,
    ];

    public function image()
    {
        return $this->hasOne(Image::class);
    }

}
