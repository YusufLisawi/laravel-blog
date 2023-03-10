<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a class="duration-100 hover:text-red-600" href="{{ route('posts.index') }}">
                Posts
            </a> / {{ __('Add post') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-3xl mx-auto px-3">
            <form class="px-6 py-4 mx-auto" action="{{ route('posts.store') }}" method='POST'>

                @csrf
                <div class="mb-4">
                    <x-input-label name="Title">
                        Title
                    </x-input-label>
                    <input class="form-control" name="title" id="title" type="text"
                        value="{{ old('title') }}">
                    @error('title')
                        <x-input-error messages="{{ $message }}"></x-input-error>
                    @enderror
                </div>
                <div class="mb-4">
                    <x-input-label name="Content">
                        Content
                    </x-input-label>
                    <textarea name="content" id="desc" cols="30" rows="10">{{ old('content') }}</textarea>
                    @error('content')
                        <x-input-error messages="{{ $message }}"></x-input-error>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <x-primary-button>
                        {{ __('Add post') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
