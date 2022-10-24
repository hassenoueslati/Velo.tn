<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showAllCategory(){
        $listCategory = Category::all();
        return view("ShopingBack.categoryback.index",compact("listCategory"));
    }

    public function deleteCategory($id){
        $Category = Category::find($id);
        $Category->delete();
        return redirect("/category");
    }

    public function editCategory($id){
        $Category = Category::find($id);
        return view("ShopingBack.categoryback.edit",compact("Category"));
    }

    public function updateCategory(Request $request,$id){
        $Category = Category::find($id);
        $Category->nomCategory = $request->get('nomCategory');
        $Category->update();
        return redirect('/category');
    }

    public function createformcategory(){
        return view('Category.create');
    }

    public function saveCategory(Request $request){
        request()->validate([
            'nomCategory' =>'required|min:5'
        ]);
        $Category = new Category();
        $Category->nomCategory = request('nomCategory');
        $Category->save();
        return redirect('/category');
    }
}
