<?php

namespace App\Http\Livewire\Modal;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddAdmin extends Component
{
    use WithFileUploads;
    public $fullname, $phone, $email, $username, $password, $image;
    protected $rules = [
        'fullname' => 'required',
        'phone' => 'required',
        'email' => 'required|email|unique:users,email',
        'username' => 'required|unique:users,username',
        'password' => 'required',
        'image' => 'image',
    ];
    public function render()
    {
        return view('livewire.modal.add-admin');
    }
    public function updated($image)
    {
        $this->validateOnly($image);
    }
    public function submit()
    {
        $validated = $this->validate();
        if(!$this->image){
            $path = null;
        }else{
            $path = $this->image->store('public/image');
        }
        User::create([
            'role_id' => 2,
            'name' => $validated['fullname'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'username' => $validated['username'],
            'password' => Hash::make($validated['password']),
            'image' => $path
        ]);
        $this->reset();
        $this->emit('adminStored');
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Admin added successfully"
        ]);
    }
}
