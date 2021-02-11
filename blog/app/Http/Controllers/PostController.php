<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        // dd(auth()->user()->posts);
        $posts = Post::get();
        return view('posts', ['posts'=>$posts]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body'=>'required'
        ]);
        // Post::create([
        //     'body'=>$request->body,
        //     'user_id'=>auth()->user()->id,
        // ]);

        // $request->user()->posts()->create([
        //     'body'=>$request->body
        // ]);
        
        $request->user()->posts()->create($request->only('body'));

        return redirect()->route('posts')->with('success', 'Post added successfully');
    }    
}
