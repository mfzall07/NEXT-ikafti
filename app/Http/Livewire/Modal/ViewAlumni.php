<?php

namespace App\Http\Livewire\Modal;

use App\Models\Alumni;
use Livewire\Component;

class ViewAlumni extends Component
{
    public $alumni;
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
    }
}
