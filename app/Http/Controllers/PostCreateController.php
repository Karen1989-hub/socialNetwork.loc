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

        if($postText!="" || $postImage!=""){
        $insert = new Post;
        $insert->postsUserId = $userId;
        $insert->userName = $userName;
        if($postImage!=""){
            $insert->postImage = $postImage->getClientOriginalName();
            $postImage->move('images/post-images',$postImage->getClientOriginalName());
        }
        if($postText!=""){
            $insert->aboutPost = $postText;
        }           
        $insert->save();               
        }
       
        return back();
    }

    public function insertLike(){
       // return response()->json(['msg'=> "namak karenic"], 200);
       return back();
    }
}
