<?php

namespace App\Http\Livewire\Modal;

use App\Models\Job;
use Livewire\Component;

class EditJob extends Component
{
    public $editedId, $company_name, $title, $description;
    protected $listeners = [
        'edit-job' => 'editJob'
    ];
    protected $rules = [
        'company_name' => 'required',
        'title' => 'required',
        'description' => 'required'
    ];
    public function render()
    {
        return view('livewire.modal.edit-job');
    }
    public function editJob($id)
    {
        $this->editedId = $id;
        $job = Job::find($id);
        $this->company_name = $job->company_name;
        $this->title = $job->title;
        $this->description = $job->description;
    }
    public function update()
    {
        $validated = $this->validate();
        $job = Job::find($this->editedId);
        $job->update($validated);
        $this->emit('jobEdited');
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Job edited successfully"
        ]);
    }
}
