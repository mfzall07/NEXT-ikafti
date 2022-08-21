<?php

namespace App\Http\Livewire\Modal;

use App\Models\WaitingList;
use Livewire\Component;

class Accept extends Component
{
    public $approveId;
    protected $listeners = [
        'approve' => 'approve',
    ];
    public function render()
    {
        return view('livewire.modal.accept');
    }
    public function approve($id)
    {
        $this->approveId = $id;
    }
    public function confirm()
    {
        WaitingList::find($this->approveId)->delete();
        $this->emit('alumniApproved');
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Alumni Approved"
        ]);
    }
}
