<?php

namespace App\Http\Livewire\Card;

use App\Models\Alumni;
use Livewire\Component;
use Livewire\WithPagination;

class CardAlumni extends Component
{
    use WithPagination;
    public function render()
    {
        $alumnis = Alumni::doesntHave('waiting_list')->latest()->paginate(8, ['*'], 'alumniPage');
        return view('livewire.card.card-alumni', compact('alumnis'));
    }
}
