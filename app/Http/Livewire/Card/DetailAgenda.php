<?php

namespace App\Http\Livewire\Card;

use Livewire\Component;

class DetailAgenda extends Component
{
    public $agenda;
    public function render()
    {
        return view('livewire.card.detail-agenda');
    }
}
