<?php

namespace App\Http\Livewire\Carousel;

use App\Models\Announcement;
use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        $announcements = Announcement::latest()->take(3)->get();
        return view('livewire.carousel.header', compact('announcements'));
    }
}
