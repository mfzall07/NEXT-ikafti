<?php

namespace App\Http\Livewire\Section;

use App\Models\Content;
use Livewire\Component;

class InformasiTerkini extends Component
{
    public function render()
    {
        $infos = Content::where('category', 'Information')->latest()->take(3)->get();
        return view('livewire.section.informasi-terkini', compact('infos'));
    }
}
