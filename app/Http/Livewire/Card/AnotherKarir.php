<?php

namespace App\Http\Livewire\Card;

use App\Models\Job;
use Livewire\Component;

class AnotherKarir extends Component
{
    public $job;
    public function render()
    {
        $jobs = Job::whereNot('id', $this->job->id)->latest()->get();
        return view('livewire.card.another-karir', compact('jobs'));
    }
}
