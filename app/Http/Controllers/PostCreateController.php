<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;

class PostCreateController extends Controller
{
    public function createNewPost(Request $request){
        $userId = Auth::id();
        $userName = $request->input('userName');
        $postText = $request->input('texts');
        $postImage = $request->file('postFile');       

        $insert = new Post;
        $insert->postsUserId = $userId;
        $insert->userName = $userName;
        $insert->postImage = $postImage->getClientOriginalName();
        $insert->aboutPost = $postText;
        $insert->save();
       
        $postImage->move('images/post-images',$postImage->getClientOriginalName());


       // dd($userId,$userName,$postText,$postImage);
        return back();
    }
}
