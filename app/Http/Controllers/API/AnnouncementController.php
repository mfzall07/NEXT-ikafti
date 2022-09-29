<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AnnouncementResource;
use App\Models\Announcement;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Nette\Utils\Random;

class AnnouncementController extends Controller
{
    public function index()
    {
        $ann = Announcement::latest()->when(request('limit'),function ($q){
            $q->take(request('limit'));
        })->get();
        return response()->json([
            'success' => true,
            'message' => 'Data Announcement',
            'data' => AnnouncementResource::collection($ann)
        ],200);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            // 'image' => 'nullable|image'
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
                $rand = Random::generate(40, '0-9a-zA-Z');
                $namaFile = $rand.".".$extention;
                $image = base64_decode($image_parts[1]);
                Storage::put('public/image/'.$namaFile, $image);
                $path = 'public/image/'.$namaFile;
        }else{
            $path = null;
        }
        $validated['image'] = $path;
        $ann = Announcement::create($validated);
        return response()->json([
            'success' => true,
            'message' => 'Announcement has been added',
            'data' => new AnnouncementResource($ann)
        ], 201);
    }
    public function show($announcement)
    {
        try{
            $ann = Announcement::findOrFail($announcement);
            return response()->json([
                'success' => true,
                'message' => 'Announcement found',
                'data' => new AnnouncementResource($ann)
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
                // 'image' => 'nullable|image'
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
                    $rand = Random::generate(40, '0-9a-zA-Z');
                    $namaFile = $rand.".".$extention;
                    $image = base64_decode($image_parts[1]);
                if($ann->image){
                    Storage::disk('public')->delete(str_replace('public/', '', $ann->image));
                }
                Storage::put('public/image/'.$namaFile, $image);
                $path = 'public/image/'.$namaFile;
            }else{
                $path = $ann->image;
            }
            $validated['image'] = $path;
            $ann->update($validated);
            return response()->json([
                'success' => true,
                'message' => 'Announcement has been updated',
                'data' => new AnnouncementResource($ann)
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
