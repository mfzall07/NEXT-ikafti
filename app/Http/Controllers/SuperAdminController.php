<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function Dashboard() {
        return view('auth.role.superadmin.dashboard');
    }
    
}
