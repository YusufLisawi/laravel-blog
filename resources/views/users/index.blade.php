<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-4 items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Users') }}
            </h2>
            <button onclick="Livewire.emit('openModal', 'add-user')"
                class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150ƒ">Create
                user</button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto px-3">
            <livewire:user-table />
        </div>
    </div>
</x-app-layout>
