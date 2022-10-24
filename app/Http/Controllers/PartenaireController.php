<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Psy\Readline\Hoa\Console;
use Psy\Readline\Hoa\ConsoleOutput;

class PartenaireController extends Controller
{


    public function showAllPartenaireBack(){
        $listPartenaire = Partenaire::all()->sortByDesc('id');
        return view("PartenaireBack.index",compact("listPartenaire"));
    }



    public function showPartenaire($id){
        $partenaire = Partenaire::find($id);
        return view("PartenaireBack.show",compact("partenaire"));
    }

    public function deletePartenaire($id){
        $partenaire = Partenaire::find($id);

        $partenaire->delete();
        return redirect('/partenaire');
    }

    public function editPartenaire($id){
        $partenaire = Partenaire::find($id);

        return view("PartenaireBack.edit",compact("partenaire"));
    }

    public function updatePartenaire(Request $request,$id){
        $partenaire = Partenaire::find($id);
        request()->validate([
            'specialitePartenaire' => 'required|min:5',
            'nomPartenaire' => 'required',
            'etat' => 'required|min:5',
        ]);
        $partenaire->specialitePartenaire = $request->get('specialitePartenaire');
        $partenaire->nomPartenaire = $request->get('nomPartenaire');
        $partenaire->etat = $request->get('etat');
        $partenaire->update();
        return redirect('/partenaire');
    }

    public function createPartenaire(){
        return view('PartenaireBack.create');
    }

    public function savePartenaire(Request $request){
        request()->validate([
            'specialitePartenaire' => 'required|min:5',
            'nomPartenaire' => 'required',
            'etat' => 'required|min:5',
        ]);
        $partenaire = new Partenaire();
        $partenaire->specialitePartenaire = $request->get('specialitePartenaire');
        $partenaire->nomPartenaire = $request->get('nomPartenaire');
        if($request->hasFile('logo'))
        {
            $file = $request->file('logo');
            $name=$file->getClientOriginalName();
            $file->move(public_path().'/uploads/', $name);
            $data['logo'] = $name;
        }
        $partenaire->etat = $request->get('etat');
        $partenaire->save();
        return redirect('/partenaire');
    }



}
