<?php

namespace App\Http\Livewire\Card;

use App\Models\Alumni;
use Livewire\Component;
use Livewire\WithPagination;

class CardAlumni extends Component
{
    use WithPagination;
    public $filter_name = '', $filter_generation = '', $filter_domicile = '';
    public function render()
    {
        $alumnis = Alumni::doesntHave('waiting_list')
            ->where('name','like', '%'.$this->filter_name.'%')
            ->where('generation','like', '%'.$this->filter_generation.'%')
            ->where('domicile','like', '%'.$this->filter_domicile.'%')
            ->latest()->paginate(8, ['*'], 'alumniPage');
        return view('livewire.card.card-alumni', compact('alumnis'));
    }
}
