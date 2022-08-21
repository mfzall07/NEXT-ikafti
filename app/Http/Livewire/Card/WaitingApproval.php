<?php

namespace App\Http\Livewire\Card;

use App\Models\WaitingList;
use Livewire\Component;

class WaitingApproval extends Component
{
    public $approval_count;
    protected $listeners = [
        'alumniApproved' => '$refresh',
        'alumniDeclined' => '$refresh',
    ];
    public function render()
    {
        $this->approval_count = WaitingList::count();
        return view('livewire.card.waiting-approval');
    }
}
