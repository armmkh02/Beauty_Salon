<?php

namespace App\Models;

use App\User;
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

}
