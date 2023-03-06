<div class="p-3">
    <div class="font-semibold font-gray-700 text-lg">{{ $confirmationTitle }}</div>

    <div class="py-2">
        @if($userId)
            userId: {{ $userId }}
        @endif
        @if($userIds)
            userIds: @json($userIds)
        @endif
        <div class="font-normal text-gray-600">{{ $confirmationDescription }}</div>
        <div class="space-x-2 flex justify-end mt-3">
            <x-secondary-button wire:click="$emit('closeModal')">
                Cancel
            </x-secondary-button>
            <x-danger-button wire:click="confirm">
                Confirm
            </x-danger-button>
        </div>
    </div>

</div>
