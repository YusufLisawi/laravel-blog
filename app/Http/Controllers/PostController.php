<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __invoke()
    {
        // $posts = Post::all();
        $posts = Post::latest()->get();
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

    public function storePost(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => rand(1, 10),
        ]);

        return redirect()->route('posts.index');
    }

    public function editPost(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function updatePost(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.show', compact('post'));
    }
}
