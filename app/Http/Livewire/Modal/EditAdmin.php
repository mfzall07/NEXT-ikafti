<?php

namespace App\Http\Livewire\Modal;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Component;

class EditAdmin extends Component
{
    protected $listeners = [
        'edit-admin' => 'editAdmin'
    ];
    public $editedId, $edit_fullname, $edit_phone, $edit_email, $edit_username, $edit_password;

    public function rules()
    {
        return [
            'edit_fullname' => 'required',
            'edit_phone' => 'required',
            'edit_email' => 'required|email|'. Rule::unique('users', 'email')->ignore($this->editedId, 'id'),
            'edit_username' => 'required|'. Rule::unique('users', 'username')->ignore($this->editedId, 'id'),
            'edit_password' => 'nullable',
        ];
    }
    protected $messages = [
        'edit_fullname.required' => 'The fullname field is required.',
        'edit_phone.required' => 'The phone field is required.',
        'edit_email.required' => 'The email field is required.',
        'edit_email.email' => 'The email must be a valid email address.',
        'edit_email.unique' => 'The email has already been taken.',
        'edit_username.required' => 'The username field is required.',
        'edit_username.unique' => 'The username has already been taken.'
    ];
    public function render()
    {
        return view('livewire.modal.edit-admin');
    }
    public function editAdmin($id)
    {
        $this->editedId = $id;
        $user = User::find($id);
        $this->edit_fullname = $user->name;
        $this->edit_phone = $user->phone;
        $this->edit_email = $user->email;
        $this->edit_username = $user->username;
    }
    public function update()
    {
        $validated = $this->validate();
        $user = User::find($this->editedId);
        $user->name = $validated['edit_fullname'];
        $user->phone = $validated['edit_phone'];
        $user->email = $validated['edit_email'];
        $user->username = $validated['edit_username'];
        if($validated['edit_password'] != null){
            $user->password = Hash::make($validated['edit_password']);
        }
        $user->save();
        $this->emit('adminEdited');
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Admin edited successfully"
        ]);
    }

}
