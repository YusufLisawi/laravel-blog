<?php

namespace App\Http\Livewire;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class EditUser extends ModalComponent
{
    public ?int $userId = null;
    public $name;
    public $email;

    public $oldname;
    public $oldemail;

    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|email|unique:users,email',
    ];

    public function save()
    {
        $validatedData = $this->validate();

        $name = $this->name;
        $email = $this->email;

        if ($this->userId) {
            $user = user::query()->find($this->userId);
        }

        $this->closeModalWithEvents([
            'pg:eventRefresh-default',
        ]);
    }

    public function mount(int $userId)
    {
        $this->userId = $userId;
        $user = user::query()->find($this->userId)->getAttributes();
        $this->oldname = $user['name'];
        $this->oldemail = $user['email'];
    }

    public function render()
    {
        return view('livewire.edit-user');
    }

    public function cancel()
    {
        $this->closeModal();
    }
}
