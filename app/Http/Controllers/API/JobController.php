<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\JobResource;
use App\Models\Job;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Nette\Utils\Random;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job = Job::latest()->when(request('limit'),function ($q){
            $q->take(request('limit'));
        })->get();
        return response()->json([
            'success' => true,
            'message' => 'Data Job',
            'data' => JobResource::collection($job)
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company_name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'phone' => 'required',
            'job_type' => 'required',
            'placement' => 'required',
            'salary' => 'required',
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
        $job = Job::create($validated);
        return response()->json([
            'success' => true,
            'message' => 'Job has been added',
            'data' => new JobResource($job)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $job = Job::findOrFail($id);
            return response()->json([
                'success' => true,
                'message' => 'Job found',
                'data' => new JobResource($job)
            ]);
        }catch(Exception){
            return response()->json([
                'success' => false,
                'message' => 'Job not found',
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $job = Job::findOrFail($id);
            $validator = Validator::make($request->all(), [
                'company_name' => 'required',
                'title' => 'required',
                'description' => 'required',
                'phone' => 'required',
                'job_type' => 'required',
                'placement' => 'required',
                'salary' => 'required',
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
                if($job->image){
                    Storage::disk('public')->delete(str_replace('public/', '', $job->image));
                }
                Storage::put('public/image/'.$namaFile, $image);
                $path = 'public/image/'.$namaFile;
            }else{
                $path = $job->image;
            }
            $validated['image'] = $path;
            $job->update($validated);
            return response()->json([
                'success' => true,
                'message' => 'Job has been updated',
                'data' => new JobResource($job)
            ], 201);
        }catch(Exception){
            return response()->json([
                'success' => false,
                'message' => 'Job not found',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $job = Job::findOrFail($id);
            Storage::disk('public')->delete(str_replace('public/', '', $job->image));
            $job->delete();
            return response()->json([
                'success' => true,
                'message' => 'Job has been deleted',
            ]);
        }catch(Exception){
            return response()->json([
                'success' => false,
                'message' => 'Job not found',
            ]);
        }
    }
}
