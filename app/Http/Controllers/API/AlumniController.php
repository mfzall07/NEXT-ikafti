<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Alumni;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumni = Alumni::all();
        return response()->json([
            'success' => true,
            'message' => 'Data Alumni',
            'data' => $alumni
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
            'name' => 'required',
            'company' =>'required',
            'address' =>'required',
            'domicile' =>'required',
            'email' =>'required|email',
            'phone' =>'required',
            'birth_place' =>'required',
            'birth_date' =>'required',
            'generation' =>'required',
            'program_studi' =>'required',
            'image' => 'nullable|image',
            'proof' =>'nullable|mimes:png,jpg,jpeg,pdf'
        ]);
        if($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => 'Validation Error',
                'errors' => $validator->errors()
            ]);
        }
        $validated = $validator->validate();
        $alumni = Alumni::create([
            'name' => $validated['name'],
            'company' => $validated['company'],
            'address' => $validated['address'],
            'domicile' => $validated['domicile'],
            'email' => $validated['email'],
            'phone' =>$validated['phone'],
            'birth_place' =>$validated['birth_place'],
            'birth_date' =>$validated['birth_date'],
            'generation' =>$validated['generation'],
            'program_studi' =>$validated['program_studi'],
            // 'image' => $path,
            // 'proof' => $proof_path
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Alumni has been added',
            'data' => $alumni
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
            $alumni = Alumni::findOrFail($id);
            return response()->json([
                'success' => true,
                'message' => 'Alumni found',
                'data' => $alumni
            ]);
        }catch(Exception){
            return response()->json([
                'success' => false,
                'message' => 'Alumni not found',
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
            $alumni = Alumni::findOrFail($id);
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'company' =>'required',
                'address' =>'required',
                'domicile' =>'required',
                'email' =>'required|email',
                'phone' =>'required',
                'birth_place' =>'required',
                'birth_date' =>'required',
                'generation' =>'required',
                'program_studi' =>'required',
                'image' => 'nullable|image',
                'proof' =>'nullable|mimes:png,jpg,jpeg,pdf'
            ]);
            if($validator->fails()){
                return response()->json([
                    'success' => false,
                    'message' => 'Validation Error',
                    'errors' => $validator->errors()
                ]);
            }
            $validated = $validator->validate();
            $alumni->update([
                'name' => $validated['name'],
                'company' => $validated['company'],
                'address' => $validated['address'],
                'domicile' => $validated['domicile'],
                'email' => $validated['email'],
                'phone' =>$validated['phone'],
                'birth_place' =>$validated['birth_place'],
                'birth_date' =>$validated['birth_date'],
                'generation' =>$validated['generation'],
                'program_studi' =>$validated['program_studi'],
                // 'image' => $path,
                // 'proof' => $proof_path
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Alumni has been updated',
                'data' => $alumni
            ], 201);
        }catch(Exception){
            return response()->json([
                'success' => false,
                'message' => 'Alumni not found',
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
            $alumni = Alumni::findOrFail($id);
            $alumni->delete();
            return response()->json([
                'success' => true,
                'message' => 'Alumni has been deleted',
            ]);
        }catch(Exception $e){
            return response()->json([
                'success' => false,
                'message' => 'Alumni not found',
            ]);
        }
    }
}