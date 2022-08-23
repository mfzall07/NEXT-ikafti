<?php

namespace App\Http\Livewire\Modal;

use App\Models\Announcement;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditAnnouncement extends Component
{
    use WithFileUploads;
    public $editedId, $title, $description, $image, $image_temp;
    protected $listeners = [
        'edit-announcement' => 'editAnnouncement'
    ];
    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'image' => 'nullable|image',
    ];
    public function render()
    {
        return view('livewire.modal.edit-announcement');
    }
    public function editAnnouncement($id)
    {
        $this->editedId = $id;
        $this->reset('image_temp');
        $ann = Announcement::find($id);
        $this->image = $ann->image;
        $this->title = $ann->title;
        $this->description = $ann->description;
    }
    public function updated($image_temp)
    {
        $this->validateOnly($image_temp);
    }
    public function submit()
    {
        $validated = $this->validate();
        $ann = Announcement::find($this->editedId);
        if($this->image_temp){
            if($ann->image){
                Storage::disk('public')->delete(str_replace('public/', '', $ann->image));
            }
            $path = $this->image_temp->store('public/image');
        }else{
            $path = $ann->image;
        }
        $validated['image'] = $path;
        $ann->update($validated);
        $this->emit('announcementEdited');
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Announcement edited successfully"
        ]);
    }
}
