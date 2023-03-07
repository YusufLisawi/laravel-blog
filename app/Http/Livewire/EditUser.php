<?php

namespace App\Http\Livewire;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class EditUser extends ModalComponent
{
    // public ?int $userId = null;
    public $user;

    public function mount(User $user)
    {
        // $this->userId = $user->id;
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.edit-user');
    }

    public function cancel()
    {
        $this->closeModal();
    }

    public function update()
    {
        // if ($this->userId) {
        //     $user = user::query()->find($this->userId);
        // }

        $this->closeModalWithEvents([
            'pg:eventRefresh-default',
        ]);
    }
}
