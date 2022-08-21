<?php

namespace App\Http\Livewire\Modal;

use App\Models\Alumni;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddAlumni extends Component
{
    use WithFileUploads;
    public $fullname, $image, $current_company, $address, $domicile, $email, $phone, $birth_place, $birth_date, $generation, $program_studi;
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
        'image' => 'image',
    ];
    public function render()
    {
        return view('livewire.modal.add-alumni');
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
        Alumni::create([
            'name' => $validated['fullname'],
            'company' => $validated['current_company'],
            'address' => $validated['address'],
            'domicile' => $validated['domicile'],
            'email' => $validated['email'],
            'phone' =>$validated['phone'],
            'birth_place' =>$validated['birth_place'],
            'birth_date' =>$validated['birth_date'],
            'generation' =>$validated['generation'],
            'program_studi' =>$validated['program_studi'],
            'image' => $path
        ]);
        $this->reset();
        $this->emit('alumniStored');
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Alumni added successfully"
        ]);
    }
}
