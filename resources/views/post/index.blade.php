<!-- @extends('layout')
@section('title', 'post')
@section('content') -->

<x-app-layout>

    <div class="row">
        @foreach ($posts as $post)
        <div class="col-4 my-2">


            <div class="card w-100" style="width: 18rem;">
                <img class=" card-img-top" src="{{ asset('images/'.$post->image)}}" alt="">
                <div class="card-body">
                    <h5 class="card-title"> {{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}.</p>
                    <a href="{{route('post.show',$post->id)}}">read more</a>
                </div>
            </div>

        </div>
        <!-- <div class="d-inline-block">
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
    </div> -->
        @endforeach
    </div>
    </div>
</x-app-layout>