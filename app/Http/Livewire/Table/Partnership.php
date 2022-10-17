<?php

namespace App\Http\Livewire\Table;

use App\Models\Partnership as ModelsPartnership;
use Livewire\Component;

class Partnership extends Component
{
    public $search = '';
    protected $listeners = [
        'partnershipStored' => '$refresh',
        'partnershipEdited' => '$refresh',
    ];
    public function render()
    {
        $partnerships = $this->search == null ?
            ModelsPartnership::latest()->paginate(4, ['*'], 'partnershipPage') :
            ModelsPartnership::where('title', 'like', '%'.$this->search.'%')
                ->latest()->paginate(4, ['*'], 'partnershipPage');
        return view('livewire.table.partnership', compact('partnerships'));
    }
}
