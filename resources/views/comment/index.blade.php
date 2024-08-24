@extends('layout')
@section('title', 'comments')
@section('content')
@foreach ($comments as $comment)
<div>
    <span style="font-weight:bold; font-size:x-large">Description </span> {{ $comment->description }}
</div>
<!-- <div class="d-inline-block">
    <form action="/comments/{{$comment->id}}" method="POST">
        @method("delete")
        @csrf

        <button type="submit" class="btn btn-outline-primary ">Delete</button>
    </form>
</div>
<div class="d-inline-block">
    <form action="/comments/{{$comment->id}}/edit" method="GET">
        <a> <button type="submit" class="btn btn-outline-primary">Update</button> </a>
    </form>
</div> -->
@endforeach

</div>
@endsection