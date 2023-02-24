@extends('master')
@section('meta')
    <title>Posts {{ $post->id }}</title>
@endsection
@section('content')
    <a class="" href="{{ route('posts.index') }}">
        <p class="text-red-500 text-3xl font-bold">&larrb;</p>
    </a>
    <small class="text-gray-500">Post {{ $post->id }}</small>
    <div>
        <div class="mb-8">
            <h2 class="text-xl font-bold">
                {{ $post->title }}
            </h2>
            {{-- <small class="text-gray-400">Published at {{ $post->created_at->format('M m, Y') }}</small> --}}
        </div>
        <div class="content mb-8">
            <p>{{ $post->content }}</p>
        </div>
        <div class="comments">
            <h3 class="text-red-500 text-lg font-semibold mb-2">Comments</h3>
            <ul>
                @foreach ($post->comments as $comment)
                    <li>&bull; {{ $comment->body }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
