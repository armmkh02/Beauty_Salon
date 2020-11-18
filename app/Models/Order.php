<?php

namespace App\Models;

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

    const Unchecked = 'new';
    const Checked   = 'checked';

    public const STATUS = [
        0 => self::Unchecked ,
        1 => self::Checked   ,
    ];

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

}
