<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
     protected $fillable = [
         'friend1_firstName','friend1_lastName','friend1_imageName','friend1',
         'friend2_firstName','friend2_lastName','friend2_imageName','friend2'
     ];
}
