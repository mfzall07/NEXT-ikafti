<?php

namespace App\Http\Livewire\Modal;

use App\Models\User;
use Livewire\Component;

class Delete extends Component
{
    public $deletedId = '', $entity = '';
    protected $listeners = [
        'delete-admin' => 'deleteAdmin'
    ];
    public function render()
    {
        return view('livewire.modal.delete');
    }
    public function deleteAdmin($id)
    {
        $this->deletedId = $id;
        $this->entity = 'admin';
    }
    public function confirm()
    {
        if($this->entity == 'admin'){
            $user = User::findOrFail($this->deletedId);
            $user->delete();
            $this->emit('adminDeleted');
        }
    }
}
