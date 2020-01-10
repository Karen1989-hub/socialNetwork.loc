<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkExperien extends Model
{
    protected $fillable = [
       'userId','company','designation','from','to','city/Town','description'
    ];
}
