<?php

namespace App\Http\Livewire\Modal;

use App\Models\Alumni;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ViewAlumni extends Component
{
    public $alumni, $image, $proof;
    protected $listeners = [
        'view-alumni' => 'viewAlumni'
    ];
    public function render()
    {
        return view('livewire.modal.view-alumni');
    }
    public function viewAlumni($id)
    {
        $alumni = Alumni::find($id);
        $this->alumni = $alumni;
        $this->image = $alumni->image;
        $this->proof = $alumni->proof;
    }
    public function download($filename)
    {
        return Storage::disk('public')->download('proof/'.$filename);
    }
}
