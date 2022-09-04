<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image'
        ]);
        if($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => 'Validation Error',
                'errors' => $validator->errors()
            ]);
        }
        $validated = $validator->validate();
        $ann = Announcement::create($validated);
        return response()->json([
            'success' => true,
            'message' => 'Announcement has been added',
            'data' => $ann
        ], 201);
    }
}
