<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FriendRequest extends Model
{
    protected $fillable = [
        'from','to','from_frstName','from_lastName','from_imageName'
    ];
}
