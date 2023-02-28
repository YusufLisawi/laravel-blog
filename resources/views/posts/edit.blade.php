<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a class="duration-100 hover:text-red-600" href="{{ route('posts.index') }}">
                Posts
            </a> / {{ __('Edit post') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <form class="px-6 py-4 mx-auto" action="{{ route('posts.update', $post) }}" method='POST'>
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <x-input-label name="Title">
                        Title
                    </x-input-label>
                    <input class="form-control" name="title" id="title" type="text" placeholder="Title"
                        required value="{{ $post->title }}">
                </div>
                <div class="mb-4">
                    <x-input-label name="Content">
                        Content
                    </x-input-label>
                    <textarea name="content" id="desc" cols="30" rows="10" required placeholder="Content">{{ $post->content }}</textarea>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg"
                        type="submit">
                        Update post
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
