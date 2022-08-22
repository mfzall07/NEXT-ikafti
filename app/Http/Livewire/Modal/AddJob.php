<?php

namespace App\Http\Livewire\Modal;

use App\Models\Job;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddJob extends Component
{
    use WithFileUploads;
    public $company_name,$image, $phone, $job_type, $placement, $salary, $title, $description;
    protected $rules = [
        'company_name' => 'required',
        'title' => 'required',
        'description' => 'required',
        'phone' => 'required',
        'job_type' => 'required',
        'placement' => 'required',
        'salary' => 'required',
        'image' => 'nullable|image'
    ];
    public function render()
    {
        return view('livewire.modal.add-job');
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
        $validated['image'] = $path;
        Job::create($validated);
        $this->reset();
        $this->emit('jobStored');
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Job added successfully"
        ]);
    }
}
