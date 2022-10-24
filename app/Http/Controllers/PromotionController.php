<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function showAllPromotion(){
        $listPromotion = Promotion::all();
        return view("Promotion.show",compact("listPromotion"));
    }

    public function showAllPromotionBack(){
        $listPromotion = Promotion::all();
        $categories = Category::all();

        return view("ShopingBack.Promotionback.index",compact("listPromotion","categories"));
    }

    public function deletePromotion($id){
        $Promotion = Promotion::find($id);
        $Promotion->delete();
        return redirect("/promotion");
    }



    public function editPromotion($id){
        $Promotion = Promotion::find($id);
        return view("",compact("Promotion"));
    }

    public function editPromotionBack($id){
        $Promotion = Promotion::find($id);
        return view("ShopingBack.promotionback.edit",compact("Promotion"));
    }

    public function updatePromotion(Request $request,$id){
        $Promotion = Promotion::find($id);
        $input=$request->all();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $name=$file->getClientOriginalName();
            $file->move(public_path().'/uploads/', $name);
            $data['image'] = $name;
        }
        $Promotion->update($input);
        return redirect('/promotion');
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
        return redirect('/promotion');
    }
}
