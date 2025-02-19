<?php

namespace App\Http\Controllers;

use App\Models\Court_Type;
use Illuminate\Http\Request;

class Court_TypeController extends Controller
{
    public function index () {
        $types = Court_Type::all();
        // return $types;
        return view('mcourt_type', compact('types'));
    }

    
}
