<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function addContent() {
        return view('auth.addContent');
    }
    public function editContent() {
        return view('auth.editContent');
    }
    public function karirDetails() {
        return view('auth.karir-details');
    }
    public function informationDetails() {
        return view('auth.information-datails');
    }
}
