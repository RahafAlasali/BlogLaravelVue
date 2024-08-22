<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    create Post
    <form action="/post" method="POST">
        @csrf
        <label for="title"> Title</label>
        <input type="text" name="title" id="title" value="{{old('title')}}" >
       
        @error('title') 
        <div>{{$message}}</div>
        @enderror
        <br>
        <label for="desc" > Title</label>
        <input type="text" name="desc" id="desc" value="{{old('desc')}}"  >
        @error('desc') 
        <div>{{$message}}</div>
        @enderror
        <input type="submit">
    </form>
</body>
</html>