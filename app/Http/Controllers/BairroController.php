<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BairroController extends Controller
{
    public function getPlace(Request $request)
    {
        $place = $request->place;

        $places = DB::select(DB::raw("SELECT name FROM places WHERE name LIKE '%$place%'"));
        if (sizeof($places) == 0)
            $places = ['message' => 'Não há bairro com esse nome'];
        
        return $places;
    }
}
