<!-- @extends('layout')  
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
@endsection -->

<x-app-layout>
    <x-slot name="header">
        Welcome
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Welcome Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima optio hic quae et maxime
                    molestiae velit vero dicta! Saepe quas eaque maiores, delectus deserunt quo fugit et eveniet ad
                    doloribus.

                </div>
            </div>
        </div>
    </div>
</x-app-layout>