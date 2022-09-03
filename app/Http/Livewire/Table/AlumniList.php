<?php

namespace App\Http\Livewire\Table;

use App\Models\Alumni;
use Livewire\Component;
use Livewire\WithPagination;

class AlumniList extends Component
{
    use WithPagination;
    public $search;
    protected $listeners = [
        'alumniStored' => '$refresh',
        'alumniDeleted' => '$refresh',
        'alumniEdited' => '$refresh',
        'alumniApproved' => '$refresh'
    ];
    public function render()
    {
        $alumnis = $this->search == null ?
            Alumni::doesntHave('waiting_list')->latest()->paginate(4, ['*'], 'alumniPage') :
            Alumni::doesntHave('waiting_list')
                ->where('name', 'like', '%'.$this->search.'%')
                ->orwhere('domicile', 'like', '%'.$this->search.'%')
                ->orwhere('phone', 'like', '%'.$this->search.'%')
                ->orwhere('generation', 'like', '%'.$this->search.'%')
                ->latest()->paginate(4, ['*'], 'alumniPage');
        return view('livewire.table.alumni-list', compact('alumnis'));
    }
}
