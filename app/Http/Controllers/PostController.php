<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * @param  Request  $request
     * @param  string  $id
     * @return Response
     */

    public function __invoke()
    {
        // or $posts = Post::latest()->get();
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function getPostById($id)
    {
        $post = Post::find($id);
        return view('posts.post', compact('post'));
    }
}
