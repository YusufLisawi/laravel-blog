@extends('master')
@section('meta')
    <title>Posts list</title>
@endsection
@section('content')
    <a class="inline-block text-center font-bold bg-red-500 hover:bg-red-400 text-gray-100 mx-4 my-3 p-2 rounded-lg"
        href="{{ route('posts.create') }}" class="hyperlink">New Post</a>
    <section class="flex flex-row flex-wrap items-stretch">
        @foreach ($posts as $post)
            <div class="w-full sm:w-1/2 lg:w-1/3 pb-6 ">
                <div class="card bg-gray-700/40 rounded-2xl flex flex-col justify-between m-2 p-5 shadow h-full">
                    <div>
                        <a class="block w-full font-bold hyperlink"
                            href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                        <p>
                            {{ substr($post->content, 0, 100) }}
                            @if (strlen($post->content) > 50)
                                ...
                            @endif
                        </p>
                    </div>
                    <div class="text-right">
                        <a class="block w-full hyperlink font-semibold text-red-500 hover:text-red-400"
                            href="{{ route('posts.show', $post) }}">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endsection
