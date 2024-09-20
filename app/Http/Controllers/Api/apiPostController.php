<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Post;
use Spatie\Permission\Models\Role;
class apiPostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role_or_permission:Admin'])->only(['destroy', 'store']);
        // $this->middleware(['role:Admin'])->only(['destroy', 'store']);
    }
    public function register()
    {
        return response()->json(['message' => 'apiauth']);
    }
    public function index()
    {
        $posts = Post::with('comment', 'user')->paginate(3);

        return PostResource::collection($posts);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id)->with('comment');
        return response()->json($post);
    }


    public function store(Request $req)
    {

        $post = new Post();
        //add request to rule
        $req->validate(['title' => 'required', 'description' => 'required']);
        $post->title = $req->title;
        $post->description = $req->description;
        $post->save();
        return PostResource::make($post);
    }


    public function update(Request $req, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $req->title;
        $post->description = $req->desc;
        $post->save();
        return PostResource::make($post);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        // if (!Gate::allows('delete-post', $post)) {
        //     return response()->json(['error' => 'unauthorization 403']);
        $post->delete();
        return 'DELETE POST ';

    }
}