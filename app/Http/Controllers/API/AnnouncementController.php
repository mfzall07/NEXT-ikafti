<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AnnouncementController extends Controller
{
    public function index()
    {
        $ann = Announcement::latest()->take(4)->get();
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
        if($request->has('image')){
            $image_parts = explode(";base64,", $request->image);
                $image_type_aux = explode("image/", $image_parts[0]);
                $extention = $image_type_aux[1];
                $namaFile = 'user-'.time().".".$extention;
                $image = base64_decode($image_parts[1]);
            $path = Storage::put('public/image/staff', $image);
        }else{
            $path = null;
        }
        $validated['image'] = $path;
        $ann = Announcement::create($validated);
        return response()->json([
            'success' => true,
            'message' => 'Announcement has been added',
            'data' => $ann
        ], 201);
    }
    public function show($announcement)
    {
        try{
            $ann = Announcement::findOrFail($announcement);
            return response()->json([
                'success' => true,
                'message' => 'Announcement found',
                'data' => $ann
            ]);
        }catch(Exception){
            return response()->json([
                'success' => false,
                'message' => 'Announcement not found',
            ]);
        }
    }
    public function update($announcement, Request $request)
    {
        try{
            $ann = Announcement::findOrFail($announcement);
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
            if($request->has('image')){
                $image_parts = explode(";base64,", $request->image);
                    $image_type_aux = explode("image/", $image_parts[0]);
                    $extention = $image_type_aux[1];
                    $namaFile = 'user-'.time().".".$extention;
                    $image = base64_decode($image_parts[1]);
                if($ann->image){
                    Storage::disk('public')->delete(str_replace('public/', '', $ann->image));
                }
                $path = Storage::put('public/image', $image);
            }else{
                $path = $ann->image;
            }
            $validated['image'] = $path;
            $ann->update($validated);
            return response()->json([
                'success' => true,
                'message' => 'Announcement has been updated',
                'data' => $ann
            ], 201);
        }catch(Exception){
            return response()->json([
                'success' => false,
                'message' => 'Announcement not found',
            ]);
        }
    }
    public function destroy($announcement)
    {
        try{
            $ann = Announcement::findOrFail($announcement);
            Storage::disk('public')->delete(str_replace('public/', '', $ann->image));
            $ann->delete();
            return response()->json([
                'success' => true,
                'message' => 'Announcement has been deleted',
            ]);
        }catch(Exception){
            return response()->json([
                'success' => false,
                'message' => 'Announcement not found',
            ]);
        }
    }
}
