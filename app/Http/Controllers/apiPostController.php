<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class apiPostController extends Controller
{
    public function index()
    {
        $posts = Post::with('comment')->paginate(3);
    
        return  response()->json($posts);
    }

    public function show($id)
    {
        $post=  Post::findOrFail($id);
        return response()->json($post) ;
    }


    public function store(Request  $req)
    {

        $post =  new Post();
        $post->title = $req->title ;
        $post->description = $req->desc ;
        $req->validate(['title'=>'required','desc'=>'required']);
        $post->save();
        return response()->json($post);
    }
     

     public function update(Request $req , $id)
     {         
        $post =  Post::findOrFail($id);
        $post->title = $req->title;
        $post->description = $req->desc ;     
        $post->save();
        return  response()->json($post);
     }

    public function destroy($id)
    {
        $post =  Post::findOrFail($id);
        $post->delete();
        return  'DELETEPOET ';
    }
}