<?php

namespace App\Http\Livewire\Form;

use App\Models\Alumni;
use App\Models\WaitingList;
use Livewire\Component;

class RegisterAlumni extends Component
{
    public $name, $company, $address, $domicile, $email, $phone, $birth_place, $birth_date, $generation, $program_studi;
    protected $rules = [
        'name' => 'required',
        'company' =>'required',
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
        return view('livewire.form.register-alumni');
    }
    public function submit()
    {
        $validated = $this->validate();
        $alumni = Alumni::create($validated);
        WaitingList::create([
            'alumni_id' => $alumni->id
        ]);
        $this->reset();
        $this->emit('alumniRegistered');
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Alumni registered successfully"
        ]);
    }
}
