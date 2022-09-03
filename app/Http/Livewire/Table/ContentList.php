<?php

namespace App\Http\Livewire\Table;

use App\Models\Content;
use Livewire\Component;
use Livewire\WithPagination;

class ContentList extends Component
{
    use WithPagination;
    public $search;
    protected $listeners = [
        'contentDeleted' => '$refresh'
    ];
    public function render()
    {
        $contents = $this->search == null ?
            Content::latest()->paginate(4, ['*'], 'contentPage') :
            Content::where('title', 'like', '%'.$this->search.'%')
                ->latest()->paginate(4, ['*'], 'contentPage');
        return view('livewire.table.content-list', compact('contents'));
    }
}
