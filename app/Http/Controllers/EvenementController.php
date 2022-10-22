<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\evenement;

class EvenementController extends Controller
{
    public function showAllEvenement(){
        $listevenement= evenement::all();
        return view ("Evenement.show",compact("listevenement"));
    }

    public function deleteEvenement($id){
        $evenement=evenement::find($id);
        $evenement->delete();
        return redirect("/evenement");
    }

    public function editEvenement ($id){
        $evenement=Evenement::find($id);
        return view ('evenement.edit',compact('evenement'));
    }

    public function updateEvenement(Request $request,$id){
        $evenement=Evenement::find($id);
        $evenement->nomEvenement = $request->get('nomEvenement');
        $evenement->dateEvenement = $request->get('dateEvenement');
        $evenement->nbPlaces = $request->get('nbPlaces');
        $evenement->categorieEvenement = $request->get('categorieEvenement');
        $evenement->update();
        return redirect('/evenement');
    }

    public function createEvenement(){
        return view('evenement.create');
    }
    public function saveEvenement(Request $request){

        $evenement = new Evenement();
        $evenement->nomEvenement = $request->get('nomEvenement');
        $evenement->dateEvenement = $request->get('dateEvenement');
        $evenement->nbPlaces = $request->get('nbPlaces');
        $evenement->categorieEvenement = $request->get('categorieEvenement');
        $evenement->save();
        return redirect('/evenement');

    }
}
