<?php

namespace App\Http\Livewire\Card;

use App\Models\Content;
use Livewire\Component;

class TotalContent extends Component
{
    public $content_count;
    protected $listeners = [
        'contentDeleted' => '$refresh'
    ];
    public function render()
    {
        $this->content_count = Content::count();
        return view('livewire.card.total-content');
    }
}
