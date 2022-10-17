<?php

namespace App\Http\Livewire\Modal;

use App\Models\Partnership;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddPartnership extends Component
{
    use WithFileUploads;
    public $title, $image;
    protected $rules = [
        'title' => 'required',
        'image' => 'nullable|image',
    ];
    public function updated($image)
    {
        $this->validateOnly($image);
    }
    public function render()
    {
        return view('livewire.modal.add-partnership');
    }
    public function submit()
    {
        $validated = $this->validate();
        if(!$this->image){
            $path = null;
        }else{
            $path = $this->image->store('public/image');
        }
        $validated['image'] = $path;
        Partnership::create($validated);
        $this->reset();
        $this->emit('partnershipStored');
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Partnership added successfully"
        ]);

    }
}
