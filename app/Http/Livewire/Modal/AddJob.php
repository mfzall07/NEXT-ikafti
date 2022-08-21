<?php

namespace App\Http\Livewire\Modal;

use App\Models\Job;
use Livewire\Component;

class AddJob extends Component
{
    public $company_name, $title, $description;
    protected $rules = [
        'company_name' => 'required',
        'title' => 'required',
        'description' => 'required'
    ];
    public function render()
    {
        return view('livewire.modal.add-job');
    }
    public function submit()
    {
        $validated = $this->validate();
        Job::create($validated);
        $this->reset();
        $this->emit('jobStored');
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Job added successfully"
        ]);
    }
}
