<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaveMyEducation extends Model
{
   protected $fillable = [
       'userId','myUniversity','educationFrom','educationTo','description','graduated'
    ];
}
