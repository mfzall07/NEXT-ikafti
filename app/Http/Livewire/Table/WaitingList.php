<?php

namespace App\Http\Livewire\Table;

use App\Models\Alumni;
use App\Models\WaitingList as ModelsWaitingList;
use Livewire\Component;
use Livewire\WithPagination;

class WaitingList extends Component
{
    use WithPagination;
    public $search, $approveId;
    protected $listeners = [
        'alumniApproved' => '$refresh',
        'alumniDeclined' => '$refresh',
    ];
    public function render()
    {
        $waiting_lists = $this->search == null ?
            ModelsWaitingList::has('alumni')->latest()->paginate(5, ['*'], 'waitingPage') :
            ModelsWaitingList::whereHas('alumni', function($q){
                $q->where('name', 'like', '%'.$this->search.'%');
            })->latest()->paginate(5, ['*'], 'waitingPage');
        return view('livewire.table.waiting-list', compact('waiting_lists'));
    }
}
