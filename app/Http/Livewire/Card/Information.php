<?php

namespace App\Http\Livewire\Card;

use App\Models\Content;
use Livewire\Component;

class Information extends Component
{
    public function render()
    {
        $infos = Content::where('category', 'Information')->latest()->paginate(8);
        return view('livewire.card.information', compact('infos'));
    }
}
