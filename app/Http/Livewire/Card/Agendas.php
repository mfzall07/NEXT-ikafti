<?php

namespace App\Http\Livewire\Card;

use App\Models\Content;
use Livewire\Component;
use Livewire\WithPagination;

class Agendas extends Component
{
    use WithPagination;
    public function render()
    {
        $agendas = Content::where('category', 'Agenda')->latest()->paginate(8);
        return view('livewire.card.agendas', compact('agendas'));
    }
}
