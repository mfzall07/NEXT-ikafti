<?php

namespace App\Http\Livewire\Table;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AdminList extends Component
{
    use WithPagination;
    public $search;
    protected $listeners = [
        'adminStored' => '$refresh',
        'adminEdited' => '$refresh',
        'adminDeleted' => '$refresh'
    ];
    public function render()
    {
        $admins = $this->search == null ?
            User::where('role_id', 2)->latest()->paginate(5, ['*'], 'adminPage') :
            User::where('role_id', 2)
                ->where('name', 'like', '%'.$this->search.'%')
                ->orwhere('phone', 'like', '%'.$this->search.'%')
                ->latest()->paginate(5, ['*'], 'adminPage');
        return view('livewire.table.admin-list', compact('admins'));
    }
}
