<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = User::where('role_id', 2)->latest()->take(4)->get();
        return response()->json([
            'success' => true,
            'message' => 'Data Admin',
            'data' => $admin
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
        if(Auth::user()->role_id != 1){
            return response()->json([
                'success' => false,
                'message' => 'Not Allowed'
            ]);
        }
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'image' => 'nullable|image',
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
        $admin = User::create([
            'role_id' => 2,
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'username' => $validated['username'],
            'password' => Hash::make($validated['password']),
            'image' => $path
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Admin has been added',
            'data' => $admin
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
            $admin = User::findOrFail($id);
            return response()->json([
                'success' => true,
                'message' => 'Admin found',
                'data' => $admin
            ]);
        }catch(Exception){
            return response()->json([
                'success' => false,
                'message' => 'Admin not found',
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
        if(Auth::user()->role_id != 1){
            return response()->json([
                'success' => false,
                'message' => 'Not Allowed'
            ]);
        }
        try{
            $admin = User::findOrFail($id);
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required|email|'. Rule::unique('users', 'email')->ignore($id, 'id'),
                'username' => 'required|'. Rule::unique('users', 'username')->ignore($id, 'id'),
                'password' => 'nullable',
                'image' => 'nullable|image',
            ]);
            // return 'ok';
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
                if($admin->image){
                    Storage::disk('public')->delete(str_replace('public/', '', $admin->image));
                }
                $path = Storage::put('public/image', $image);
            }else{
                $path = $admin->image;
            }
            $admin->name = $validated['name'];
            $admin->phone = $validated['phone'];
            $admin->email = $validated['email'];
            $admin->username = $validated['username'];
            if($validated['password'] != null){
                $admin->password = Hash::make($validated['password']);
            }
            $admin->image = $path;
            $admin->save();
            return response()->json([
                'success' => true,
                'message' => 'Admin has been updated',
                'data' => $admin
            ], 201);
        }catch(Exception){
            return response()->json([
                'success' => false,
                'message' => 'Admin not found',
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
        if(Auth::user()->role_id != 1){
            return response()->json([
                'success' => false,
                'message' => 'Not Allowed'
            ]);
        }
        try{
            $admin = User::findOrFail($id);
            Storage::disk('public')->delete(str_replace('public/', '', $admin->image));
            $admin->delete();
            return response()->json([
                'success' => true,
                'message' => 'Admin has been deleted',
            ]);
        }catch(Exception){
            return response()->json([
                'success' => false,
                'message' => 'Admin not found',
            ]);
        }
    }
}
