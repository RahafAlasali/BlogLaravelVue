<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
   

    <div>
 
  
    @foreach ($posts as $post)
    <p>Title {{ $post->title }}</p>
    <p>Description {{ $post->description }}</p>
    <form action="/post/{{$post->id}}" method="POST">
        @method("delete")
        @csrf
    <button > Delete</button>

    </form>
    <div>
    <form action="/post/{{$post->id}}/edit" method="GET">
    
    <a >    <button> Update</button></a>
    </form>
    </div>
    @endforeach
     
    </div>
</body>
</html>