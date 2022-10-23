<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showAllCategory(){
        $listCategory = Category::all();
        return view("Category.show",compact("listCategory"));
    }

    public function deleteCategory($id){
        $Category = Category::find($id);
        $Category->delete();
        return redirect("");
    }

    public function editCategory($id){
        $Category = Category::find($id);
        return view("",compact("Category"));
    }

    public function updateCategory(Request $request,$id){
        $Category = Category::find($id);
        $Category->nomCategory = $request->get('nomCategory');
        $Category->update();
        return redirect('');
    }

    public function createformcategory(){
        return view('Category.create');
    }

    public function saveCategory(Request $request){
        $Category = new Category();
        $Category->nomCategory = $request->get('nomCategory');
        $Category->save();
        return redirect('');
    }
}
