<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Job;
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

    public function karirDetail($id) {
        $job = Job::findOrFail($id);
        return view('karir-detail', compact('job'));
    }

    public function information() {
        return view('information');
    }

    public function informationDetail($id) {
        $info = Content::findOrFail($id);
        return view('information-datail', compact('info'));
    }

    public function agenda() {
        return view('agenda');
    }

    public function agendaDetail() {
        return view('agenda-detail');
    }
}
