<?php

namespace App\Http\Livewire\Form;

use App\Models\Alumni;
use App\Models\WaitingList;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterAlumni extends Component
{
    use WithFileUploads;
    public $name, $image, $proof, $company, $address, $domicile, $email, $phone, $birth_place, $birth_date, $generation, $program_studi;
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
        'image' => 'nullable|image',
        'proof' =>'required|mimes:png,jpg,jpeg,pdf'
    ];
    public function render()
    {
        return view('livewire.form.register-alumni');
    }
    public function updated($image)
    {
        $this->validateOnly($image);
    }
    public function updatedProof()
    {
        $this->validateOnly('proof');
    }
    public function submit()
    {
        $validated = $this->validate();
        if(!$this->image){
            $path = null;
        }else{
            $path = $this->image->store('public/image');
        }
        $proof_path = $this->proof->store('public/proof');
        $validated['proof'] = $proof_path;
        $validated['image'] = $path;
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
