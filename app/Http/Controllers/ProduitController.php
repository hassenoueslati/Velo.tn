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




    public function searchProduitBack(Request $req){
        $data=Produit::
        where('nomProduit', 'like', '%'.$req->input('query').'%')->get();
        return  view('ShopingBack.produitback.index',['produits'=>$data]);
    }


    public function showAllProduit(){

        $listProduit = Produit::all();
        echo("<script>console.log('PHP: " . $listProduit. "');</script>");
        return view("Produit.show", compact("listProduit"));
    }


    public function showAllProduitBack(){

        $listProduit = Produit::all();
        $categories = Category::all();
        echo("<script>console.log('PHP: " . $listProduit. "');</script>");
        return view("ShopingBack.produitback.index", compact("listProduit","categories"));
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
        $request->session()->flash('message',$input['nomProduit']. 'successfully added');
        return redirect('product');
    }



    public function deleteProduit($id){
        $Produit = Produit::find($id);
        $Produit->delete();
        return redirect("/product");
    }

    public function editProduit($id){
        $Produit = Produit::find($id);
        return view("Produit.edit",compact("Produit"));
    }
    public function editProduitBack($id){
        $Produit = Produit::find($id);
        $categories=Category::all();
        return view("ShopingBack.produitback.edit",compact("Produit","categories"));
    }

    public function updateProduit(Request $request,$id){
        $Produit = Produit::find($id);
        request()->validate([
            'nomProduit' => 'required|min:5',
            'descriptionProduit' => 'required',
            'prixProduit' => 'required',
            'quantity' => 'required',
            'etatProduit' => 'required|min:5',
            'image' => 'required',
        ]);
        $input=$request->all();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $name=$file->getClientOriginalName();
            $file->move(public_path().'/uploads/', $name);
            $data['image'] = $name;
        }
        $Produit->update($input);
        return redirect('/product');
    }



}
