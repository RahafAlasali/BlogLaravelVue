<x-app-layout>
    <div class="row">
        <div class="col-6 mx-auto">
            <form action="/post" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="title" class="form-label"> Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">

                @error('title')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <br>
                <label for="desc" class="form-label"> Description</label>
                <input type="text" name="desc" id="desc" class="form-control" value="{{old('desc')}}">
                @error('desc')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <label for="formFile" class="form-label"> Image</label>
                <img src="" alt="" class="img-blog">
                <input class="form-control" type="file" name="image" require>
                <button type="submit" class="btn btn-outline-primary my-4">Create</button>

            </form>
        </div>
    </div>
</x-app-layout>