<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('guest.post.index', compact('posts'));
    }

    public function show($slug){
        $posts = Post::where('slug', $slug)->firstOrFail();
        return view('guest.post.show', compact('post'));
    }
}
