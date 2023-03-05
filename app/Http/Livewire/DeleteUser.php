<?php

namespace App\Http\Livewire;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class DeleteUser extends ModalComponent
{
    public ?int $userId = null;

    public array $userIds = [];

    public string $confirmationTitle = '';

    public string $confirmationDescription = '';

    public static function modalMaxWidth(): string
    {
        return 'md';
    }

    public static function closeModalOnEscape(): bool
    {
        return false;
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    public function cancel()
    {
        $this->closeModal();
    }

    public function confirm()
    {
        if ($this->userId) {
            user::query()->find($this->userId)->delete();
        }

        if ($this->userIds) {
            user::query()->whereIn('id', $this->userIds)->delete();
        }

        $this->closeModalWithEvents([
            'pg:eventRefresh-default',
        ]);
    }

    public function render()
    {
        return view('livewire.delete-user');
    }
}
