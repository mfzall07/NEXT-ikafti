<?php

namespace App\Http\Livewire\Modal;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AddAdmin extends Component
{
    public $fullname, $phone, $email, $username, $password;
    protected $rules = [
        'fullname' => 'required',
        'phone' => 'required',
        'email' => 'required|email|unique:users,email',
        'username' => 'required|unique:users,username',
        'password' => 'required',
    ];
    public function render()
    {
        return view('livewire.modal.add-admin');
    }
    public function submit()
    {
        $validated = $this->validate();
        User::create([
            'role_id' => 2,
            'name' => $validated['fullname'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'username' => $validated['username'],
            'password' => Hash::make($validated['password'])
        ]);
        $this->reset();
        $this->emit('adminStored');
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Admin added successfully"
        ]);
    }
}
