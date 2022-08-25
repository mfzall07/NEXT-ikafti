<?php

namespace App\Http\Livewire\Card;

use App\Models\Content;
use Livewire\Component;

class Agenda extends Component
{
    public function render()
    {
        $agendas = Content::where('category', 'Agenda')->latest()->take(3)->get();
        return view('livewire.card.agenda', compact('agendas'));
    }
}
