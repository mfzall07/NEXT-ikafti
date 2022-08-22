<?php

namespace App\Http\Livewire\Card;

use App\Models\Job;
use Livewire\Component;

class Karir extends Component
{
    public function render()
    {
        $jobs = Job::latest()->take(3)->get();
        return view('livewire.card.karir', compact('jobs'));
    }
}
