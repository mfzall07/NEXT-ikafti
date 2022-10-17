<?php

namespace App\Http\Livewire\Modal;

use App\Models\Partnership;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditPartnership extends Component
{
    use WithFileUploads;
    public $editedId, $title, $image, $image_temp;
    protected $listeners = [
        'edit-partnership' => 'editPartnership'
    ];
    protected $rules = [
        'title' => 'required',
        'image_temp' => 'nullable|image',
    ];
    protected $messages = [
        'image_temp.image' => 'The image must be an image.'
    ];
    public function render()
    {
        return view('livewire.modal.edit-partnership');
    }
    public function editPartnership($id)
    {
        $this->editedId = $id;
        $this->reset('image_temp');
        $partner = Partnership::find($id);
        $this->image = $partner->image;
        $this->title = $partner->title;
    }
    public function updated($image_temp)
    {
        $this->validateOnly($image_temp);
    }
    public function submit()
    {
        $validated = $this->validate();
        // dd($validated);
        $partner = Partnership::find($this->editedId);
        if($this->image_temp){
            if($partner->image){
                Storage::disk('public')->delete(str_replace('public/', '', $partner->image));
            }
            $path = $this->image_temp->store('public/image');
        }else{
            $path = $partner->image;
        }
        $validated['image'] = $path;
        $partner->update($validated);
        $this->emit('partnershipEdited');
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Partnership edited successfully"
        ]);
    }
}
