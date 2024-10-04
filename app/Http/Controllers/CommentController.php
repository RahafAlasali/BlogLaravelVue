<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use App\Notifications\commentPost;
use App\Http\Resources\CommentResource;
class CommentController extends Controller
{
  public function index()
  {
    $comments = Comment::all();
    return view('comment.index', ['comments' => $comments]);
  }

  public function store(Request $request, $id)
  {

    $post = Post::findOrFail($id);
    $comment = new Comment();
    $comment->description = $request->description;
    $comment->post_id = $id;
    $comment->save();
    $user = $post->user;

    // $user = auth()->user();
    if ($user) {
      $user->notify(new commentPost());
    }
    return back();
  }

}