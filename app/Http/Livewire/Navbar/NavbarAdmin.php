<?php

namespace App\Http\Livewire\Navbar;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NavbarAdmin extends Component
{
    public function render()
    {
        return view('livewire.navbar.navbar-admin');
    }
    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect('/');
    }
}
