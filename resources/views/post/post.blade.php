@extends('layout')  
@section('title', 'post')
@section('content')   
<span style="font-weight:bold; font-size:x-large">Title</span> {{$post->title}}
   <br>
   <span style="font-weight:bold; font-size:x-large">Description</span>{{ $post->description}}
 @endsection