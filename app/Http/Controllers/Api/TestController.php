<?php

namespace App\Http\Api\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index () {
        try {
            $user = auth()->userOfFail();
            
        } catch (\Tymon\JWTAuth\Exceptions $e){
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
