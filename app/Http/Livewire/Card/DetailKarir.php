<?php

namespace App\Http\Livewire\Card;

use Livewire\Component;

class DetailKarir extends Component
{
    public $job;
    public function render()
    {
        return view('livewire.card.detail-karir');
    }
}
