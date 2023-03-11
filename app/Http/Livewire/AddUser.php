<?php

namespace App\Http\Livewire;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;
use Illuminate\Support\Facades\Log;


class EditUser extends ModalComponent
{
    public User $user;
    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|email',
        'password' => 'required|password',
    ];

    // public function mount(int $userId)
    // {
    //     $this->user = User::find($userId);
    //     $this->name = $this->user->name;
    //     $this->email = $this->user->email;
    // }

    public function save()
    {
        // $this->validate();

        dd($this->name);
        $this->dispatchBrowserEvent('succsess', ['message' => 'User added sucssefully']);

        $this->closeModalWithEvents([
            'pg:eventRefresh-default',
        ]);
    }


    public function render()
    {
        return view('livewire.add-user');
    }

    public function cancel()
    {
        $this->closeModal();
    }
}
