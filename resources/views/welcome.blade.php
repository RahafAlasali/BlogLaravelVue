@extends('layout')  
@section('title', 'Page Title')

@section('content')
        <div class="max-w-7xl mx-auto p-6 lg:p-8">

        <h1>Welcome</h1>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        </div>   
@endsection