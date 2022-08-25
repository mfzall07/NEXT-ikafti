<?php

namespace App\Http\Livewire\Card;

use App\Models\Content;
use Livewire\Component;

class AnotherInformation extends Component
{
    public $info;
    public function render()
    {
        $infos = Content::where('category', 'information')->whereNot('id', $this->info->id)->latest()->take(4)->get();
        return view('livewire.card.another-information', compact('infos'));
    }
}
