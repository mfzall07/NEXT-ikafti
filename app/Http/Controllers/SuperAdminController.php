<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function Dashboard() {
        return view('role.superadmin.dashboard');
    }
    public function addContent() {
        return view('role.superadmin.addContent');
    }
}
