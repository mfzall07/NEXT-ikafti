<?php

namespace App\Http\Livewire\Card;

use Livewire\Component;

class DetailInformation extends Component
{
    public $content;
    public function render()
    {
        return view('livewire.card.detail-information');
    }
}
