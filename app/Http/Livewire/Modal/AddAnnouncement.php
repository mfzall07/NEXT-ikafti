<?php

namespace App\Http\Livewire\Modal;

use App\Models\Announcement;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddAnnouncement extends Component
{
    use WithFileUploads;
    public $title, $description, $image;
    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'image' => 'nullable|image',
    ];
    public function render()
    {
        return view('livewire.modal.add-announcement');
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
        Announcement::create($validated);
        $this->reset();
        $this->emit('announcementStored');
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Announcement added successfully"
        ]);

    }
}
