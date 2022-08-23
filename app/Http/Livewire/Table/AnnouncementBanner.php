<?php

namespace App\Http\Livewire\Table;

use App\Models\Announcement;
use Livewire\Component;

class AnnouncementBanner extends Component
{
    public $search = '';
    protected $listeners = [
        'announcementStored' => '$refresh',
        'announcementEdited' => '$refresh',
        'announcementDeleted' => '$refresh',
    ];
    public function render()
    {
        $announcements = $this->search == null ?
            Announcement::latest()->paginate(5, ['*'], 'annPage') :
            Announcement::where('title', 'like', '%'.$this->search.'%')
                ->latest()->paginate(5, ['*'], 'annPage');
        return view('livewire.table.announcement-banner', compact('announcements'));
    }
}
