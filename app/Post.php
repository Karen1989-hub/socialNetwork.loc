<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $fillable = [
        'postsUserId','userName','postImage','aboutPost','likeCount','dislikeCount'
    ];
}
