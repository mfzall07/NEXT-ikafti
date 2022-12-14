<?php

namespace App\Http\Livewire\Table;

use App\Models\Job;
use Livewire\Component;
use Livewire\WithPagination;

class JobList extends Component
{
    use WithPagination;
    public $search;
    protected $listeners = [
        'jobStored' => '$refresh',
        'jobEdited' => '$refresh',
        'jobDeleted' => '$refresh'
    ];
    public function render()
    {
        $jobs = $this->search == null ?
            Job::latest()->paginate(4, ['*'], 'jobPage') :
            Job::where('role_id', 2)
                ->where('company_name', 'like', '%'.$this->search.'%')
                ->orwhere('title', 'like', '%'.$this->search.'%')
                ->latest()->paginate(4, ['*'], 'jobPage');
        return view('livewire.table.job-list', compact('jobs'));
    }
}
