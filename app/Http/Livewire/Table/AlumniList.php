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
        'alumniStored' => '$refresh'
    ];
    public function render()
    {
        $alumnis = $this->search == null ?
            Alumni::latest()->paginate(5, ['*'], 'alumniPage') :
            Alumni::where('role_id', 2)
                ->where('name', 'like', '%'.$this->search.'%')
                ->orwhere('domicile', 'like', '%'.$this->search.'%')
                ->orwhere('phone', 'like', '%'.$this->search.'%')
                ->orwhere('generation', 'like', '%'.$this->search.'%')
                ->latest()->paginate(5, ['*'], 'alumniPage');
        return view('livewire.table.alumni-list', compact('alumnis'));
    }
}
