<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-4 items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Posts') }}
            </h2>
            <a href="{{ route('posts.create') }}">
                <x-primary-button>
                    {{ __('Add post') }}
                </x-primary-button>
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-3">
            <section class="flex flex-row flex-wrap items-stretch">
                @foreach ($posts as $post)
                    <div class="w-full sm:w-1/2 lg:w-1/3 pb-6 ">
                        <div
                            class="card bg-white text-black shadow-lg dark:bg-slate-700/40 dark:text-white rounded-2xl flex flex-col justify-between m-2 py-3 px-5 h-full">
                            <div>
                                <small class="text-red-600 font-semibold">{{ $post->user->name }}</small>
                                <a class="block w-full font-bold hyperlink"
                                    href="{{ route('posts.show', $post) }}">{{ __($post->title) }}</a>
                                <p>
                                    {{ substr(__($post->content), 0, 100) }}
                                    @if (strlen($post->content) > 50)
                                        ...
                                    @endif
                                </p>
                            </div>
                            <div class="text-right">
                                <a class="block w-full hyperlink font-semibold text-red-600 hover:text-red-400"
                                    href="{{ route('posts.show', $post) }}">{{ __('Read more') }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>
        </div>
    </div>
</x-app-layout>
