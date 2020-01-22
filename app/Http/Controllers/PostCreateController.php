<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\Like;

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

    public function insertLike(Request $request){
        $postId = $request->input('postId');
        $id = Auth::id();

        Like::firstOrCreate(['toWhom'=>$postId,'from'=>$id,'like'=>'like']);   
        
        $count = Like::where('toWhom',$postId)->where('like','like')->count();

        $update = Post::find($postId);
        $update->likeCount = $count;
        $update->save();            
        
        return response()->json(['msg'=> $count,'mm'=>$postId], 200);
       //return back();
    }

    public function insertdisLike(Request $request){
        $postId = $request->input('postId');
        $id = Auth::id();

        Like::firstOrCreate(['toWhom'=>$postId,'from'=>$id,'dislike'=>'dislike']);

        $count = Like::where('toWhom',$postId)->where('dislike','dislike')->count();

        $update = Post::find($postId);
        $update->dislikeCount = $count;
        $update->save();

        return response()->json(['msg'=> $count,'mm'=>$postId], 200);
    }

    public function getComment(Request $request){
        $postId = $request->input('postId1');
        $comment = $request->input('commentT');
        dd($comment);
    }
}
