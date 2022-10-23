<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProduitController extends Controller
{

 public function searchProduit(Request $req){
      $data=Produit::
    where('nomProduit', 'like', '%'.$req->input('query').'%')->get();
return  view('Produit.search',['produits'=>$data]);
 }

    public function showAllProduit(){

        $listProduit = Produit::all();
        echo("<script>console.log('PHP: " . $listProduit. "');</script>");
        return view("Produit.show", compact("listProduit"));
     }

    public function createformProduit(){
        $categories=Category::all();
        return view('Produit.create',compact('categories'));
    }

    public function saveProduit(Request $request){
        $Produit = new Produit();
        $input=$request->all();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $name=$file->getClientOriginalName();
            $file->move(public_path().'/uploads/', $name);
            $data['image'] = $name;
        }
        $Produit::create($input);
        return redirect('AllProduit');
    }

     public function deleteProduit($id){
         $Produit = Produit::find($id);
         $Produit->delete();
         return redirect("/AllProduit");
     }

     public function editProduit($id){
         $Produit = Produit::find($id);
         return view("Produit.edit",compact("Produit"));
     }

     public function updateProduit(Request $request,$id){
         $Produit = Produit::find($id);
         $Produit->nomProduit = $request->get('nomProduit');
         $Produit->descriptionProduit = $request->get('descriptionProduit');
         $Produit->prixProduit = $request->get('prixProduit');
         $Produit->etatProduit = $request->get('etatProduit');
         $Produit->update();
         return redirect('AllProduit');
     }



}
