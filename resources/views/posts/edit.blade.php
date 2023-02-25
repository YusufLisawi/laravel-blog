@extends('master')
@section('meta')
    <title>Edit post</title>
@endsection
@section('content')
    <form class="px-6 py-4 mx-auto" action="{{ route('posts.update', $post) }}" method='POST'>
        <a class="" href="{{ route('posts.index') }}">
            <p class="text-red-500 text-3xl font-bold mb-3">&larrb;</p>
        </a>
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-sm font-bold mb-2" for="title">
                Title
            </label>
            <input class="bg-gray-700/50 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                name="title" id="title" type="text" placeholder="Title" required value="{{ $post->title }}">
        </div>
        <div class="mb-4">
            <label for="content" class="block  text-sm font-bold mb-2">Content</label>
            <textarea name="content" id="desc" cols="30" rows="10" required placeholder="Content"
                class="bg-gray-700/50 rounded w-full  py-2 px-3 focus:outline-none focus:shadow-outline">{{ $post->content }}</textarea>
        </div>
        <div class="flex items-center justify-between">
            <button
                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
                Update post
            </button>
        </div>
    </form>
@endsection
