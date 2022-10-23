<?php

namespace App\Http\Controllers;

use App\Models\commentaire;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function showAllCommentaire(){
        $listCommentaire = commentaire::all();
        return view("",compact("listCommentaire"));
    }
    public function deleteCommentaire($id){
        $commentaire = commentaire::find($id);
        $commentaire->delete();
        return redirect("/AllPost");
    }

    public function editCommentaire($id){
        $commentaire = commentaire::find($id);
        return view("",compact("commentaire"));
    }

    public function updateCommentaire(Request $request,$id){

        $commentaire = commentaire::find($id);
        $post = Post::find($commentaire -> post_id );
        $commentaire->contenuCommentaire = $request->get('contenuCommentaire');
        $commentaire->update();
        return redirect()->route('showPost',$post -> id);
    }

    public function createCommentaire(){
        return view('');
    }

    public function saveCommentaire(Post $post){
        request()->validate([
           'contenuCommentaire' =>'required|min:5'
        ]);
        $commentaire = new commentaire();
        $commentaire->contenuCommentaire = request('contenuCommentaire');
        $commentaire->user_id = auth()->user()->id;

        $post->commentaire()->save($commentaire);
        return redirect()->route('showPost',$post -> id);
    }

}
