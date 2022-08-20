<?php

namespace App\Http\Livewire\Navbar;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbars extends Component
{
    public function render()
    {
        return view('livewire.navbar.navbars');
    }
    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect('/');
    }
}
