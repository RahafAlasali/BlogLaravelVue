<x-app-layout>

    <div class="row my-2">
        <div class="  col-md-8 ">

            <div class="">
                @if ($post->image)
                    <img class="img" src="{{ asset('images/' . $post->image) }}" alt="">
                @else
                    <img class=" img" src="{{ asset('images/blog_2.jpg') }}" style="max-height: 300px" alt="">
                @endif
            </div>
            <div class="mt-1 pt-2" style="font-family: raleway;font-size: 30px">
                <h1>{{ $post->title }}</h1>
            </div>
            <div style="font-family: Montserrat">
                <span class="text-muted letter-spacing  font-sm ">by {{ $post->user->name }} </span>
                <span class="text-muted letter-spacing font-sm mx-4">{{ $post->created_at->format('M d,Y') }}</span>
            </div>
            <hr>

            <div class="mt-3 py-2">
                <p class="text-muted letter-spacing" style="font-family: Montserrat"> {{ $post->description }}</p>
            </div>
            <hr>
            @if (count($post->comment))
                <div class="mt-4">
                    <h3 style="font-family: raleway;font-size: 30px">Comment</h3>
                    <p>

                        @foreach ($post->comment as $comment)
                            <div class="row pt-3 align-items-center">
                                <div class="col-2">
                                    <img src="https://cdn.vuetifyjs.com/images/lists/2.jpg" class="rounded-circle"
                                        width="60" style="height:60px" alt="">
                                </div>
                                <div class="col-9">
                                    <span class="text-capitalize text-color " style="font-size: small;">
                                        June 7, 2019
                                    </span>
                                    <p class="mt-1">
                                        {{ $comment->description }}
                                    </p>
                                </div>
                            </div>
                        @endforeach

                    </p>
                </div>
            @endif
            <div class="mt-1 pb-4">
                <form action="{{ route('comment.store', $post->id) }}" method="POST">
                    @csrf
                    <label for="desc" class="form-label">Comment</label>
                    <textarea class="form-control" id="desc" name="description" rows="3"></textarea>
                    <button type="submit" class="btn  btn-primary mt-2"> submit </button>
                </form>
            </div>
        </div>
        <div class="offset-md-1 col-md-3 mt-5">

            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Categories
                </div>
                <ul class="list-group list-group-flush">

                    @foreach ($categories as $category)
                        <li class="list-group-item">{{ $category->name }}</li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</x-app-layout>
