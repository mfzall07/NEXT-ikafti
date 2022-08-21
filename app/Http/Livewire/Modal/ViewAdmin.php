<?php

namespace App\Http\Livewire\Modal;

use App\Models\User;
use Livewire\Component;

class ViewAdmin extends Component
{
    public $name, $phone, $email, $username, $image;
    protected $listeners = [
        'view-admin' => 'viewAdmin'
    ];
    public function render()
    {
        return view('livewire.modal.view-admin');
    }
    public function viewAdmin($id)
    {
        $user = User::find($id);
        $this->name = $user->name;
        $this->phone = $user->phone;
        $this->email = $user->email;
        $this->username = $user->username;
        $this->image = $user->image;
        // dd($this->all());
    }
}
