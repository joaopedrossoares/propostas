<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login(Request $request) {

        $credentials = $request->only(['email', 'password']);

        if(! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Incorrect email/password'], 401);
        }

        return response()->json(['token' => $token]);
    }

    public function index () {
        try {
            $user = auth()->userOrFail();
            
        } catch (\Tymon\JWTAuth\Exceptions $e){
            return response()->json(['error' => $e->getMessage()]);
        }

        return response()->json(['success' => true]);
    }
}
