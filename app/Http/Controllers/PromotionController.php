<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function showAllPromotion(){
        $listPromotion = Promotion::all();
        return view("Promotion.show",compact("listPromotion"));
    }

    public function deletePromotion($id){
        $Promotion = Promotion::find($id);
        $Promotion->delete();
        return redirect("");
    }

    public function editPromotion($id){
        $Promotion = Promotion::find($id);
        return view("",compact("Promotion"));
    }

    public function updatePromotion(Request $request,$id){
        $Promotion = Promotion::find($id);
        $Promotion->nomPromotion = $request->get('nomPromotion');
        $Promotion->categoriePromotion = $request->get('categoriePromotion');
        $Promotion->dateDebutPromo = $request->get('dateDebutPromo');
        $Promotion->dateFinPromo = $request->get('dateFinPromo');
        $Promotion->update();
        return redirect('');
    }

    public function createformpromotion(){
        return view('Promotion.create');
    }

    public function savePromotion(Request $request){
        $Promotion = new Promotion();
        $input=$request->all();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $name=$file->getClientOriginalName();
            $file->move(public_path().'/uploads/', $name);
            $data['image'] = $name;
        }
        $Promotion::create($input);
        return redirect('');
    }
}
