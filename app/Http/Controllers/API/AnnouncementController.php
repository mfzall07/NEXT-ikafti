<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        $ann = Announcement::all();
        return response()->json([
            'success' => true,
            'message' => 'Data Announcement',
            'data' => $ann
        ],200);
    }
}
