@extends('layout')
@section('title', 'post')
@section('content')
<div class="text-center my-2">
    <img class="img-fluid" style="max-width:50%;" src="{{ asset('images/'.$post->image)}}" alt="">
    <p style="font-weight:bold; font-size:x-large"> {{$post->title}}</p>

    <p style=" font-size:x-large"> {{ $post->description}}</p>
</div>
@endsection