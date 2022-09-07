<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job = Job::all();
        return response()->json([
            'success' => true,
            'message' => 'Data Job',
            'data' => $job
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
        $job = Job::create($validated);
        return response()->json([
            'success' => true,
            'message' => 'Job has been added',
            'data' => $job
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
                'data' => $job
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
            $job->update($validated);
            return response()->json([
                'success' => true,
                'message' => 'Job has been updated',
                'data' => $job
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
            $ann = Job::findOrFail($id);
            $ann->delete();
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