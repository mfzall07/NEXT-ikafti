<?php

namespace App\Http\Livewire\Card;

use App\Models\Job;
use Livewire\Component;
use Livewire\WithPagination;

class Karirs extends Component
{
    use WithPagination;
    public function render()
    {
        $jobs = Job::latest()->paginate(8, ['*'], 'jobPage');
        return view('livewire.card.karirs', compact('jobs'));
    }
}
