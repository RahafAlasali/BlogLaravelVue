@extends('layout')  
@section('title', 'post')
@section('content')
    create Post
    <form action="/post" method="POST">
        @csrf
        <label for="title"  class="form-label"> Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}" >
       
        @error('title') 
        <div>{{$message}}</div>
        @enderror
        <br>
        <label for="desc"  class="form-label"> Description</label>
        <input type="text" name="desc" id="desc" class="form-control" value="{{old('desc')}}"  >
        @error('desc') 
        <div>{{$message}}</div>
        @enderror
        <button type="submit" class="btn btn-outline-primary my-4">Create</button>
    </form>
    @endsection