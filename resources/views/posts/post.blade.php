@extends('master')
@section('meta')
    <title>Posts {{ $post->id }}</title>
@endsection
@section('content')
    <title>Posts {{ $post->id }}</title>
    <ul class="list-group">
        <li class="list-group-item">
            <h2>
                {{ $post->title }}
            </h2>
            <small>Published at {{ $post->created_at->format('M m, Y') }}</small>
        </li>
        <li class="list-group-item">
            <p>{{ $post->content }}</p>
        </li>
        <li class="list-group-item">
            <h3>Comments</h3>
            @foreach ($post->comments as $comment)
                <p>{{ $comment->body }}</p>
            @endforeach
        </li>
    </ul>
@endsection
