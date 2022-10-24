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
        $post = Post::find($commentaire -> post_id );
        $commentaire->delete();
        return redirect()->route('showPost',$post -> id);
    }

    public function deleteCommentaireBack($id){
        $commentaire = commentaire::find($id);
        $post = Post::find($commentaire -> post_id );
        $commentaire->delete();
        return redirect()->route('showPostBack',$post -> id);
    }

    public function editCommentaire($id){
        $commentaire = commentaire::find($id);
        $post = Post::find($commentaire -> post_id );
        return view("Post.editCommentaire",compact("commentaire","post"));
    }

    public function editCommentaireBack($id){
        $commentaire = commentaire::find($id);
        $post = Post::find($commentaire -> post_id );
        return view("ForumBack.editCommentBack",compact("commentaire","post"));
    }

    public function updateCommentaireBack(Request $request,$id){

        $commentaire = commentaire::find($id);
        $post = Post::find($commentaire -> post_id );
        $commentaire->contenuCommentaire = $request->get('contenuCommentaire');
        $commentaire->update();
        return redirect()->route('showPostBack',$post -> id);
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

    public function saveCommentaireBack(Post $post){
        request()->validate([
            'contenuCommentaire' =>'required|min:5'
        ]);
        $commentaire = new commentaire();
        $commentaire->contenuCommentaire = request('contenuCommentaire');
        $commentaire->user_id = auth()->user()->id;

        $post->commentaire()->save($commentaire);
        return redirect()->route('showPostBack',$post -> id);
    }

}
