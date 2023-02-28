<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a class="duration-100 hover:text-red-600" href="{{ route('posts.index') }}">
                Posts
            </a> / {{ __('Post ' . $post->id) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl text-black dark:text-white mx-auto px-3">
            <div>
                <div class="mb-8">
                    <h2 class="text-xl font-bold flex items-center gap-2">
                        {{ __($post->title) }}
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
                    <small class="text-gray-400">{{ __('by') }}
                        <span class="text-red-600 font-semibold">{{ $post->user->name }}</span> at
                        {{ $post->created_at->format('M d, Y') }}</small>
                </div>
                <div class="content mb-8">
                    <p>{{ __($post->content) }}</p>
                </div>
                <div class="comments">
                    <h3 class="text-red-600 text-lg font-semibold mb-2">Comments ({{ count($post->comments) }})</h3>
                    <ul>
                        @foreach ($post->comments as $comment)
                            <li class="bg-white shadow-lg dark:bg-gray-700/60 py-3 px-5 rounded-xl mb-4">
                                <small class="text-red-600 font-semibold">{{ $comment->user->name }}</small>
                                <p>{{ __($comment->body) }}</p>
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
        </div>
    </div>
</x-app-layout>
