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

    public function showPost($id){
        $post = Post::find($id);
        return view("Post.show",compact("post"));
    }

    public function deletePost($id){
        $post = Post::find($id);
        $post->delete();
        return redirect("/AllPost");
    }

    public function editPost($id){
        $post = Post::find($id);
        return view("Post.edit",compact("post"));
    }

    public function updatePost(Request $request,$id){
        $post = Post::find($id);
        $post->titrePost = $request->get('titrePost');
        $post->contenuPost = $request->get('contenuPost');
        $post->Tags = $request->get('Tags');
        $post->update();
        return redirect()->route('showPost',$post -> id);
    }

    public function createPost(){
        return view('Post.create');
    }

    public function savePost(Request $request){
        $post = new Post();
        $post->titrePost = $request->get('titrePost');
        $post->contenuPost = $request->get('contenuPost');
        $post->Tags = $request->get('Tags');
        $post->user_id = $request->get('user_id');
        $post->save();
        return redirect('/AllPost');
    }

}
