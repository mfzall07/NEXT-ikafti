<?php

namespace App\Http\Livewire\Card;

use App\Models\Content;
use Livewire\Component;
use Livewire\WithPagination;

class Information extends Component
{
    use WithPagination;
    public function render()
    {
        $infos = Content::where('category', 'Information')->latest()->paginate(8);
        return view('livewire.card.information', compact('infos'));
    }
}
