<?php

namespace App\Http\Livewire\Card;

use App\Models\User;
use Livewire\Component;

class TotalAdmin extends Component
{
    public $admin_count;
    protected $listeners = [
        'adminStored' => '$refresh',
        'adminEdited' => '$refresh',
        'adminDeleted' => '$refresh'
    ];
    public function render()
    {
        $this->admin_count = User::where('role_id', 2)->count();
        return view('livewire.card.total-admin');
    }
}
