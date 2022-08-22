<?php

namespace App\Http\Livewire\Modal;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditAdmin extends Component
{
    use WithFileUploads;
    protected $listeners = [
        'edit-admin' => 'editAdmin'
    ];
    public $editedId, $fullname, $phone, $email, $username, $password, $image, $image_temp;

    protected function rules()
    {
        return [
            'fullname' => 'required',
            'phone' => 'required',
            'email' => 'required|email|'. Rule::unique('users', 'email')->ignore($this->editedId, 'id'),
            'username' => 'required|'. Rule::unique('users', 'username')->ignore($this->editedId, 'id'),
            'password' => 'nullable',
            'image_temp' => 'nullable|image',
        ];
    }
    protected $messages = [
        'image_temp.image' => 'The image must be an image.'
    ];
    public function render()
    {
        return view('livewire.modal.edit-admin');
    }
    public function updated($image_temp)
    {
        $this->validateOnly($image_temp);
    }
    public function editAdmin($id)
    {
        $this->reset('image_temp');
        $this->editedId = $id;
        $user = User::find($id);
        $this->fullname = $user->name;
        $this->phone = $user->phone;
        $this->email = $user->email;
        $this->username = $user->username;
        $this->image = $user->image;
    }
    public function update()
    {
        $validated = $this->validate();
        $user = User::find($this->editedId);
        if($this->image_temp){
            if($user->image){
                Storage::disk('public')->delete(str_replace('public/', '', $user->image));
            }
            $path = $this->image_temp->store('public/image');
        }else{
            $path = $user->image;
        }
        $user->name = $validated['fullname'];
        $user->phone = $validated['phone'];
        $user->email = $validated['email'];
        $user->username = $validated['username'];
        if($validated['password'] != null){
            $user->password = Hash::make($validated['password']);
        }
        $user->image = $path;
        $user->save();
        $this->emit('adminEdited');
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Admin edited successfully"
        ]);
    }

}
