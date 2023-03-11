<div class="px-3 py-4">
    <div class="font-bold font-gray-700 text-lg">Edit User</div>

    <div class="px-2">
        <form class="mt-6 space-y-6">
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" wire:modal="name"
                    autofocus autocomplete="name"/>
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" name="email" type="email" class="mt-1 mb-2 block w-full"
                    wire:modal="email" autocomplete="email" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div>

        </form>
        <div class="flex items-center gap-4 mt-6">
            <x-secondary-button wire:click="cancel">
                Cancel
            </x-secondary-button>
            <x-primary-button wire:click="save">
                Save
            </x-primary-button>
        </div>
    </div>

</div>
