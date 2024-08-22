<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
Edit

<form action="{{route('post.update',$post->id)}}" method="POST" >
    @method("PUT")
    @csrf
        <label for="title"> Title</label>
        <input type="text" name="title" id="title"   value="{{$post->title}}">
        <label for="desc"> description</label>
        <input type="text" name="desc" id="desc" value="{{$post->description}}" >
         <button type="submit">Update</button>
    </form>
</body>
</html>