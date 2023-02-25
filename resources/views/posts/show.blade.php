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
            <h2 class="text-xl font-bold flex items-center gap-2">
                {{ $post->title }}
                <a class="" href="{{ route('posts.edit', $post) }}">
                    <p class="duration-200 hover:text-gray-500 text-xl font-bold">&#9998;</p>
                </a>
                <form action='{{ route('posts.delete', $post) }}' method='POST' id="deleteForm">
                    @csrf
                    @method('DELETE')
                    <button class="" type="submit">
                        @include('posts.deleteIcon')
                    </button>
                </form>
            </h2>
            <small class="text-gray-400">by
                <span class="text-red-500 font-semibold">{{ $post->user->name }}</span> at
                {{ $post->created_at->format('M d, Y') }}</small>
        </div>
        <div class="content mb-8">
            <p>{{ $post->content }}</p>
        </div>
        <div class="comments">
            <h3 class="text-red-500 text-lg font-semibold mb-2">Comments ({{ count($post->comments) }})</h3>
            <ul>
                @foreach ($post->comments as $comment)
                    <li class="bg-gray-700/60 py-3 px-5 rounded-xl mb-4">
                        <small class="text-red-500 font-semibold">{{ $comment->user->name }}</small>
                        <p>{{ $comment->body }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <script>
        const deleteForm = document.querySelector("#deleteForm");

        deleteForm.addEventListener("submit", function(e) {
            e.preventDefault();
            if (confirm("Are you sure you want to delete this post?")) {
                e.target.submit();
            }
        });
    </script>
@endsection
