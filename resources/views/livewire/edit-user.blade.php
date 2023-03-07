<div class="p-3">
    <div class="font-semibold font-gray-700 text-lg">Edit User {{dd($user)}}</div>

    <div class="py-2">
        {{-- @include('profile.partials.update-profile-information-form') --}}
        <div class="space-x-2 flex justify-end mt-3">
            <x-secondary-button wire:click="cancel">
                Cancel
            </x-secondary-button>
            <x-primary-button wire:click="update">
                update
            </x-primary-button>
        </div>
    </div>

</div>
