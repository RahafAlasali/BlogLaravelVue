<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Resources\CommentResource;
use App\Models\Post;
use App\Notifications\commentPost;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Comment;
class apiCommentController extends Controller
{


    public function index(Request $request)
    {

        //filter by post_id
        $postId = $request->post_id;
        $comments = Comment::with('post')->when($request->post_id, function (Builder $query, int $postId) {
            $query->where('post_id', $postId);
        })->paginate(5);
        return CommentResource::collection($comments);

    }
    public function store(Request $request, $id)
    {

        $post = Post::findOrFail($id);
        $comment = new Comment();
        $comment->description = $request->description;
        $comment->post_id = $id;
        $comment->save();
        $user = Auth::guard('api')->user();
        if ($user) {
            $user->notify(new commentPost());
        }
        return new CommentResource($comment);
    }
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);

        if (!Gate::allows('delete-comment', $comment)) {
            return response()->json(['error' => 'unauthorization 403']);

        } else {
            $comment->delete();
            return 'DELETE comment ';
        }

    }
}