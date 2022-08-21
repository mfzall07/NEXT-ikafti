<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function addContent() {
        return view('auth.addContent');
    }
    public function editContent() {
        return view('auth.editContent');
    }
    public function karirDetails($id) {
        // return $id;
        $job = Job::findOrFail($id);
        return view('auth.karir-details', compact('job'));
    }
    public function informationDetails() {
        return view('auth.information-datails');
    }
}
