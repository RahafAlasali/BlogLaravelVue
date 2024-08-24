@extends('layout')
@section('title', 'post')
@section('content')
@foreach ($posts as $post)
<div>
    <span style="font-weight:bold; font-size:x-large">Title</span> {{ $post->title }}
    <br>
    <span style="font-weight:bold; font-size:x-large">Description </span> {{ $post->description }}
    <br>

    <span style="font-weight:bold; font-size:x-large">Comment </span>
    @foreach($post->comment as $comment)
    <br>
    {{$comment->description }}
    @endforeach
</div>
<div class="d-inline-block">
    <form action="/post/{{$post->id}}" method="POST">
        @method("delete")
        @csrf

        <button type="submit" class="btn btn-outline-primary ">Delete</button>
    </form>
</div>
<div class="d-inline-block">
    <form action="/post/{{$post->id}}/edit" method="GET">
        <a> <button type="submit" class="btn btn-outline-primary">Update</button> </a>
    </form>
</div>
@endforeach

</div>
@endsection