<?php

namespace App\Http\Livewire\Card;

use App\Models\Alumni;
use Livewire\Component;

class TotalAlumni extends Component
{
    public $alumni_count;
    protected $listeners = [
        'alumniStored' => '$refresh',
        'alumniDeleted' => '$refresh',
        'alumniEdited' => '$refresh',
        'alumniApproved' => '$refresh'
    ];
    public function render()
    {
        $this->alumni_count = Alumni::doesntHave('waiting_list')->count();
        return view('livewire.card.total-alumni');
    }
}
