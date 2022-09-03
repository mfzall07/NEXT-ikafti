<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if(!Auth::attempt($request->only('username', 'password'))){
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 200);
        }
        $user = User::where('username', $request->username)->firstOrFail();
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'success' => true,
            'message' => 'Login Success',
            'access_token' => $token
        ], 200);
    }
}
