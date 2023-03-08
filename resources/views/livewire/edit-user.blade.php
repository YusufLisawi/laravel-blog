<div class="px-3 py-4">
    <div class="font-bold font-gray-700 text-lg">Edit User</div>

    <div class="px-2">
        <form method="post" wire:submit.prevent="save" class="mt-6 space-y-6">
            @csrf
            @method('patch')

            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" wire:modal.defer="name"
                    :value="old('name', $oldname)" required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" name="email" type="email" class="mt-1 mb-2 block w-full"
                    wire:modal.defer="email" :value="old('email', $oldemail)" required autocomplete="email" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div>

            <div class="flex items-center gap-4">
                <x-secondary-button wire:click="cancel">
                    Cancel
                </x-secondary-button>
                <x-primary-button type="submit">
                    update
                </x-primary-button>

                @if (session('status') === 'profile-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                @endif
            </div>
        </form>
    </div>

</div>
