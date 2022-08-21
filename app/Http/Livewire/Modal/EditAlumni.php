<?php

namespace App\Http\Livewire\Modal;

use App\Models\Alumni;
use Livewire\Component;

class EditAlumni extends Component
{
    protected $listeners = [
        'edit-alumni' => 'editAlumni'
    ];
    public $editedId, $fullname, $current_company, $address, $domicile, $email, $phone, $birth_place, $birth_date, $generation, $program_studi;
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
    ];

    public function render()
    {
        return view('livewire.modal.edit-alumni');
    }
    public function editAlumni($id)
    {
        $this->editedId = $id;
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
    }
    public function update()
    {
        $validated = $this->validate();
        $alumni = Alumni::find($this->editedId);
        $validated['name'] = $validated['fullname'];
        $validated['company'] = $validated['current_company'];
        $alumni->update($validated);
        $this->emit('alumniEdited');
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Alumni edited successfully"
        ]);
    }
}
