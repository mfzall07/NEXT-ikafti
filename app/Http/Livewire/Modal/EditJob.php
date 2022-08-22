<?php

namespace App\Http\Livewire\Modal;

use App\Models\Job;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditJob extends Component
{
    use WithFileUploads;
    public $editedId, $company_name, $title, $description, $image, $image_temp;
    protected $listeners = [
        'edit-job' => 'editJob'
    ];
    protected $rules = [
        'company_name' => 'required',
        'title' => 'required',
        'description' => 'required',
        'phone' => 'required',
        'job_type' => 'required',
        'placement' => 'required',
        'salary' => 'required',
        'image_temp' => 'nullable|image',
    ];
    protected $messages = [
        'image_temp.image' => 'The image must be an image.'
    ];
    public function render()
    {
        return view('livewire.modal.edit-job');
    }
    public function updated($image_temp)
    {
        $this->validateOnly($image_temp);
    }
    public function editJob($id)
    {
        $this->editedId = $id;
        $this->reset('image_temp');
        $job = Job::find($id);
        $this->company_name = $job->company_name;
        $this->title = $job->title;
        $this->description = $job->description;
        $this->phone = $job->phone;
        $this->job_type = $job->job_type;
        $this->placement = $job->placement;
        $this->salary = $job->salary;
        $this->image = $job->image;

    }
    public function update()
    {
        $validated = $this->validate();
        $job = Job::find($this->editedId);
        if($this->image_temp){
            if($job->image){
                Storage::disk('public')->delete(str_replace('public/', '', $job->image));
            }
            $path = $this->image_temp->store('public/image');
        }else{
            $path = $job->image;
        }
        $validated['image'] = $path;
        $job->update($validated);
        $this->emit('jobEdited');
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Job edited successfully"
        ]);
    }
}
