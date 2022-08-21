<?php

namespace App\Http\Livewire\Card;

use App\Models\Job;
use Livewire\Component;

class TotalJob extends Component
{
    public $job_count;
    protected $listeners = [
        'jobStored' => '$refresh',
        'jobEdited' => '$refresh',
        'jobDeleted' => '$refresh'
    ];
    public function render()
    {
        $this->job_count = Job::count();
        return view('livewire.card.total-job');
    }
}
