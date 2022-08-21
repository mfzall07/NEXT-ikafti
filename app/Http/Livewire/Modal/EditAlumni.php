<?php

namespace App\Http\Livewire\Modal;

use App\Models\Alumni;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditAlumni extends Component
{
    use WithFileUploads;
    protected $listeners = [
        'edit-alumni' => 'editAlumni'
    ];
    public $editedId, $fullname, $current_company, $address, $domicile, $email, $phone, $birth_place, $birth_date, $generation, $program_studi, $image, $image_temp;
    protected $rules = [
        'fullname' => 'required',
        'current_company' =>'required',
        'address' =>'required',
        'domicile' =>'required',
        'email' =>'required|email',
        'phone' =>'required',
        'birth_place' =>'required',
        'birth_date' =>'required',
        'generation' =>'required',
        'program_studi' =>'required',
        'image_temp' => 'image',
    ];
    protected $messages = [
        'image_temp.image' => 'The image must be an image.'
    ];

    public function render()
    {
        return view('livewire.modal.edit-alumni');
    }
    public function updated($image_temp)
    {
        $this->validateOnly($image_temp);
    }
    public function editAlumni($id)
    {
        $this->editedId = $id;
        $this->reset('image_temp');
        $alumni = Alumni::find($id);
        $this->fullname = $alumni->name;
        $this->current_company = $alumni->company;
        $this->address = $alumni->address;
        $this->domicile = $alumni->domicile;
        $this->email = $alumni->email;
        $this->phone = $alumni->phone;
        $this->birth_place = $alumni->birth_place;
        $this->birth_date = $alumni->birth_date;
        $this->generation = $alumni->generation;
        $this->program_studi = $alumni->program_studi;
        $this->image = $alumni->image;
    }
    public function update()
    {
        $validated = $this->validate();
        $alumni = Alumni::find($this->editedId);
        if($this->image_temp){
            if($alumni->image){
                Storage::disk('public')->delete(str_replace('public/', '', $alumni->image));
            }
            $path = $this->image_temp->store('public/image');
        }else{
            $path = $alumni->image;
        }
        $alumni->name = $validated['fullname'];
        $alumni->company = $validated['current_company'];
        $alumni->image = $path;
        $alumni->save();
        $this->emit('alumniEdited');
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Alumni edited successfully"
        ]);
    }
}
