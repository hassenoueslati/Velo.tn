<?php

namespace App\Http\Controllers;

use App\Models\Atelier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Psy\Readline\Hoa\Console;
use Psy\Readline\Hoa\ConsoleOutput;

class AtelierController extends Controller
{


    public function showAllAtelierBack(){
        $listAtelier = Atelier::all()->sortByDesc('id');
        return view("AtelierBack.index",compact("listAtelier"));
    }



    public function showAtelier($id){
        $atelier = Atelier::find($id);
        return view("AtelierBack.show",compact("atelier"));
    }

    public function deleteAtelier($id){
        $atelier = Atelier::find($id);

        $atelier->delete();
        return redirect('/atelier');
    }

    public function editAtelier($id){
        $atelier = Atelier::find($id);

        return view("AtelierBack.edit",compact("atelier"));
    }

    public function updateAtelier(Request $request,$id){
        $atelier = Atelier::find($id);

        $atelier->specialite = $request->get('specialite');
        $atelier->capacite = $request->get('capacite');
        $atelier->addresseAtelier = $request->get('addresseAtelier');
        $atelier->partenaires_id = $request->get('partenaires_id');
        $atelier->update();
        return redirect('/atelier');
    }

    public function createAtelier(){
        return view('AtelierBack.create');
    }

    public function saveAtelier(Request $request){
        request()->validate([
            'specialite' => 'required|min:5',
            'capacite' => 'required',
            'addresseAtelier' => 'required|min:5',
            'partenaires_id' => 'required',
        ]);
        $atelier = new Atelier();
        $atelier->specialite = request('specialite');
        $atelier->capacite = request('capacite');
        $atelier->addresseAtelier = request('addresseAtelier');
        $atelier->partenaires_id = request('partenaires_id');
        $atelier->save();
        return redirect('/atelier');
    }



}
