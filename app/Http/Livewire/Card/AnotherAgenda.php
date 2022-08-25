<?php

namespace App\Http\Livewire\Card;

use App\Models\Content;
use Livewire\Component;

class AnotherAgenda extends Component
{
    public $agenda;
    public function render()
    {
        $agendas = Content::where('category', 'Agenda')->whereNot('id', $this->agenda->id)->latest()->take(4)->get();
        return view('livewire.card.another-agenda', compact('agendas'));
    }
}
