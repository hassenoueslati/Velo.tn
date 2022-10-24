<?php

namespace App\Http\Controllers;

use App\Models\Velo;
use Illuminate\Http\Request;

class VeloFFController extends Controller
{
    public function index()
    {
        $velos = velo::all();
        return view ('veloF.index')->with('velos', $velos);
    }
 
    
    
}

