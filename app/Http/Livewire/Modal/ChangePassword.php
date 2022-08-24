<?php

namespace App\Http\Livewire\Modal;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ChangePassword extends Component
{
    public $userId, $old_password, $new_password, $confirm_password;
    protected $listeners = [
        'change-password' => 'changePassword'
    ];
    protected $rules = [
        'old_password' => 'required',
        'new_password' => 'required',
        'confirm_password' => 'required|same:new_password',
    ];
    public function render()
    {
        return view('livewire.modal.change-password');
    }
    public function changePassword($id)
    {
        $this->userId = $id;
    }
    public function submit()
    {
        $validated = $this->validate();
        $result =  Hash::check($validated['old_password'], auth()->user()->password);
        if($result){
            User::where('id', auth()->user()->id)->update([
                'password' => Hash::make($validated['new_password']),
            ]);
            $this->emit('resultChangePassword');
            $this->dispatchBrowserEvent('alert',[
                'type'=>'success',
                'message'=>"Password has been changed"
            ]);
            $this->reset();
        }else{
            $this->emit('resultChangePassword');
            $this->dispatchBrowserEvent('alert',[
                'type'=>'error',
                'message'=>"Wrong Password"
            ]);
            $this->reset();

        }
    }
}
