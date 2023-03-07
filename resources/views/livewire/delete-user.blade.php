<div class="p-3">
    <div class="font-semibold font-gray-700 text-lg">{{ $confirmationTitle }}</div>

    <div class="py-2">
        <div class="font-normal">{{ $confirmationDescription }}</div>
        <div class="space-x-2 flex justify-end mt-3">
            <x-secondary-button wire:click="cancel">
                Cancel
            </x-secondary-button>
            <x-danger-button wire:click="confirm">
                Confirm
            </x-danger-button>
        </div>
    </div>

</div>
