<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
    
        return  view('post.index',['posts'=> $posts]);
    }

    public function show($id)
    {
        $post=  Post::findOrFail($id);
        return view('post.post',['post' => $post]);
    }

    public function create()
    {
        
        return view('post.create');
    }

    public function store(Request  $req)
    {

        $post =  new Post();
        $post->title = $req->title ;
        $post->description = $req->desc ;
        $req->validate(['title'=>'required','desc'=>'required']);
        $post->save();
        return redirect('post');
    }
     
     public function edit($id)
     {
        $post =  Post::findOrFail($id);        
        return view('post.postEdit',['post'=> $post]);
     }

     public function update(Request $req , $id)
     {         
        $post =  Post::findOrFail($id);
        $post->title = $req->title;
        $post->description = $req->desc ;     
        $post->save();
        return redirect('post');
     }

    public function destroy($id)
    {
        $post =  Post::findOrFail($id);
        $post->delete();
        return redirect('post');
    }
}