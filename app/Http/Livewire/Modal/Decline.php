<?php

namespace App\Http\Livewire\Modal;

use App\Models\Alumni;
use App\Models\WaitingList;
use Livewire\Component;

class Decline extends Component
{
    public $declineId;
    protected $listeners = [
        'decline' => 'decline',
    ];
    public function render()
    {
        return view('livewire.modal.decline');
    }
    public function decline($id)
    {
        $this->declineId = $id;
    }
    public function confirm()
    {
        $wl = WaitingList::find($this->declineId);
        $alumni = Alumni::find($wl->alumni_id);
        $wl->delete();
        $alumni->delete();
        $this->emit('alumniDeclined');
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Alumni Declined"
        ]);
    }
}
