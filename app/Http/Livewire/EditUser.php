<?php

namespace App\Http\Livewire;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;
use Illuminate\Support\Facades\Log;


class EditUser extends ModalComponent
{
    public ?int $userId = null;
    public User $user;
    public $name;
    public $email;

    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|email',
    ];

    public function mount(int $userId)
    {
        $this->user = User::find($userId);
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }

    public function update()
    {
        // $this->validate();

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);
        $this->dispatchBrowserEvent('succsess', ['message' => 'User updated sucssefully']);

        $this->closeModalWithEvents([
            'pg:eventRefresh-default',
        ]);
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
