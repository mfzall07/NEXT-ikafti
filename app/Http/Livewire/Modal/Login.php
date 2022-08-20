<?php

namespace App\Http\Livewire\Modal;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $username, $password;
    public function render()
    {
        return view('livewire.modal.login');
    }
    public function submit()
    {
        // dd('sdsdds');
        if(Auth::attempt(['username' => $this->username, 'password' => $this->password])){
            $user_role_id = Auth::user()->role_id;
            if($user_role_id == 1){
                return redirect()->intended('/ikafti/Dashboard-SA');
            }
            if($user_role_id == 2){
                return redirect()->intended('/ikafti/Dashboard-Admin');
            }
            abort(404);
        }
        return redirect('/');
    }
}
