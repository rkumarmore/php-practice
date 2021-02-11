<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostLikeController extends Controller
{
    public function like(Request $request, Post $post)
    {
        // dd($post);
        if(!$post->likedBy(auth()->user())){
            $request->user()->likes()->create([
                'post_id'=>$post->id
            ]);
            return back()->with('success','Successfully liked');
        }
        return back()->with('error','Already liked');
    }
    public function unlike(Request $request, Post $post)
    {
        // dd($post);
        if($post->likedBy(auth()->user())){
            $request->user()->likes()->delete([
                'post_id'=>$post->id
            ]);

            return back()->with('success','Successfully Unliked');
        }
        return back()->with('error','You did not like this');
    }
}
