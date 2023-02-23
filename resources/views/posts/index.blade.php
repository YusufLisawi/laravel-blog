@extends('master')
@section('meta')
    <title>Posts list</title>
@endsection
@section('content')
    <h1>Posts list</h1>
    @if (count($posts) === 0)
        <p>There are no posts yet.</p>
    @else
        <ul class="list-group">
            @foreach ($posts as $post)
                <li class="list-group-item">
                    <span>
                        <a href={{ '/posts/' . $post->id }}>
                            {{ $post->title }}
                        </a>
                        <small>Published at {{ $post->created_at->format('M m, Y') }}</small>
                    </span>
                </li>
            @endforeach
        </ul>
    @endif
@endsection
