<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard() {
        return view('role.admin.dashboard');
    }
    public function addContent() {
        return view('role.admin.addContent');
    }
}
