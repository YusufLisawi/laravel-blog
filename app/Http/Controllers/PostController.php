<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __invoke()
    {
        // or $posts = Post::latest()->get();
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function showPost(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function createPost()
    {
        return view('posts.create');
    }
}
