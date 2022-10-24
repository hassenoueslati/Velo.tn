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

    public function showAllEvenementBack(){
        $listevenement= evenement::all();
        return view ("EvenementBack.index",compact("listevenement"));
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

    public function updateEvenementBack(Request $request,$id){
        $evenement=Evenement::find($id);
        $evenement->nomEvenement = $request->get('nomEvenement');
        $evenement->dateEvenement = $request->get('dateEvenement');
        $evenement->nbPlaces = $request->get('nbPlaces');
        $evenement->categorieEvenement = $request->get('categorieEvenement');
        $evenement->update();
        return redirect('/EvenementBack');
    }

    public function createEvenement(){
        return view('evenement.create');
    }
    public function saveEvenement(Request $request){

        request()->validate([
            'nomEvenement' => 'required | min:5 ',
            'dateEvenement' => 'required',
            'nbPlaces' => 'required',
            'categorieEvenement' => 'required | min:5'
        ]);
        $evenement = new Evenement();
        $evenement->nomEvenement = request('nomEvenement');
        $evenement->dateEvenement = request('dateEvenement');
        $evenement->nbPlaces = request('nbPlaces');
        $evenement->categorieEvenement = request('categorieEvenement');
        $evenement->save();
        return redirect('/EvenementBack');

    }

    public function saveEvenementBack(Request $request){

        request()->validate([
            'nomEvenement' => 'required | min:5 ',
            'dateEvenement' => 'required',
            'nbPlaces' => 'required',
            'categorieEvenement' => 'required | min:5'
        ]);
        $evenement = new Evenement();
        $evenement->nomEvenement = request('nomEvenement');
        $evenement->dateEvenement = request('dateEvenement');
        $evenement->nbPlaces = request('nbPlaces');
        $evenement->categorieEvenement = request('categorieEvenement');
        $evenement->save();
        return redirect('/EvenementBack');

    }


    public function searchEvenement()
    {
        $search_text =$_GET['query'];
        $listevenement =evenement::where('nomEvenement','LIKE','%'.$search_text.'%')->get()->sortByDesc('id');
        return view('Evenement.search',compact('listevenement'));
    }
}
