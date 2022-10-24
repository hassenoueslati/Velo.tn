<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Psy\Readline\Hoa\Console;
use Psy\Readline\Hoa\ConsoleOutput;

class PostController extends Controller
{
    public function showAllPost(){
       $listPost = Post::all()->sortByDesc('id');
       return view("Post.index",compact("listPost"));
    }

    public function showAllPostBack(){
        $listPost = Post::all()->sortByDesc('id');
        return view("ForumBack.index",compact("listPost"));
    }

    public function showPost($id){
        $post = Post::find($id);
        return view("Post.show",compact("post"));
    }

    public function showPostBack($id){
        $post = Post::find($id);
        return view("ForumBack.show",compact("post"));
    }

    public function deletePost($id){
        $post = Post::find($id);
        $this-> authorize('delete',$post);
        $post->delete();
        return redirect("/AllPost");
    }
    public function deletePostBack($id){
        $post = Post::find($id);
        $post->delete();
        return redirect("/forum");
    }

    public function editPost($id){
        $post = Post::find($id);
        $this-> authorize('update',$post);
        return view("Post.edit",compact("post"));
    }

    public function editPostBack($id){
        $post = Post::find($id);
        $this-> authorize('update',$post);
        return view("ForumBack.edit",compact("post"));
    }

    public function updatePost(Request $request,$id){
        $post = Post::find($id);
        $this-> authorize('update',$post);
        $post->titrePost = $request->get('titrePost');
        $post->contenuPost = $request->get('contenuPost');
        $post->Tags = $request->get('Tags');
        $post->update();
        return redirect()->route('showPost',$post -> id);
    }

    public function updatePostBack(Request $request,$id){
        $post = Post::find($id);
        #$this-> authorize('update',$post);
        $post->titrePost = $request->get('titrePost');
        $post->contenuPost = $request->get('contenuPost');
        $post->Tags = $request->get('Tags');
        $post->update();
        return redirect()->route('showPostBack',$post -> id);
    }

    public function createPost(){
        return view('Post.create');
    }

   /* public function savePost(Request $request){
        $post = new Post();
        $post->titrePost = $request->get('titrePost');
        $post->contenuPost = $request->get('contenuPost');
        $post->Tags = $request->get('Tags');
        $post->user_id = $request->get('user_id');
        $post->save();
        return redirect('/AllPost');
    }*/
    public function savePost(Request $request){
        $data = $request->validate([
           'titrePost' => 'required | min:5',
           'contenuPost' => 'required | min:10',
           'Tags' => 'required | min:2'
        ]);

        auth()->user()->posts()->create($data);

        return redirect('/AllPost');
    }

    public function savePostBack(Request $request){
        $data = $request->validate([
            'titrePost' => 'required | min:5',
            'contenuPost' => 'required | min:10',
            'Tags' => 'required | min:2'
        ]);

        auth()->user()->posts()->create($data);

        return redirect('/forum');
    }


    public function searchPost()
    {
        $search_text =$_GET['query'];
        $listPost =Post::where('titrePost','LIKE','%'.$search_text.'%')->get()->sortByDesc('id');
        return view('Post.search',compact('listPost'));
    }

    public function searchPostBack()
    {
        $search_text =$_GET['query'];
        $listPost =Post::where('titrePost','LIKE','%'.$search_text.'%')->get()->sortByDesc('id');
        return view('ForumBack.search',compact('listPost'));
    }

}
