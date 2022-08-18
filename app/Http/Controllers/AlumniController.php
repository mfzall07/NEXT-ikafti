<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function alumniRegister() {
        return view('register-alumni');
    }

    public function listAlumni() {
        return view('list-alumni');
    }
    
    public function tentangkami() {
        return view('tentang-kami');
    }
    
    public function karir() {
        return view('karir');
    }
    
    public function karirDetail() {
        return view('karir-detail');
    }

    public function information() {
        return view('information');
    }
    
    public function informationDetail() {
        return view('information-datail');
    }

    public function agenda() {
        return view('agenda');
    }
    
    public function agendaDetail() {
        return view('agenda-detail');
    }
}
