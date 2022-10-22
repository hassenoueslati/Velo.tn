<?php

namespace App\Http\Controllers;

use App\Models\atelier;
use http\Env\Response;
use Illuminate\Http\Request;

class AtelierController extends Controller
{
    //get all ateliers
    public function getAteliers(){
        return atelier::all();
    }

    //add atelier

    public function addAtelier(Request $request)
    {
        $atelier = new atelier();
        $atelier->specialite = $request->specialite;
        $atelier->capacite = $request->capacite;
        $atelier->addreseatelier = $request->addreseatelier;
        $atelier->partenaires_id = $request->partenaires_id;
        $atelier->save();
        return response()->json([
            'message' => 'atelier added successfully',
            'code' => 200
        ]);
    }


}
