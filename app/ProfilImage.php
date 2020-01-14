<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilImage extends Model
{
    protected $fillable = [
        'userId','imageName'
    ];
}
