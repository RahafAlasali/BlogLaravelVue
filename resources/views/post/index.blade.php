<x-app-layout>
    <div>
        <div class="row">
            <div class="d-flex justify-end">
                {{-- @if (Gate::allows('create-post'))
                <a href="{{ route('post.create') }}"> Create</a>
            @endif --}}
                @if (auth()->user()->hasAnyPermission(['create-post']))
                    <a href="{{ route('post.create') }}"> Create</a>
                @endif
            </div>

            @foreach ($posts as $post)
                <div class="col-3 my-2">

                    <div class="card w-100" style="width: 18rem; min-height: 350px">
                        <div style="max-height: 250px">
                            @if ($post->image)
                                <img class=" card-img-top img-fluid w-100" src="{{ asset('images/' . $post->image) }}"
                                    alt="">
                            @else
                                <img class=" card-img-top"
                                    src="https://demo.themefisher.com/revolve-bootstrap/images/news/f2.jpg"
                                    alt="">
                            @endif
                        </div>
                        <div class="card-body my-2  d-flex flex-column " style="justify-content:space-between">
                            <div>
                                <h5 class="card-title">
                                    <a href="{{ route('post.show', $post->id) }}" class="">{{ $post->title }}</a>
                                </h5>
                                <span class="text-muted letter-spacing text-uppercase font-sm">April 19, 2019</span>
                            </div>
                            <div class="justify-content-end d-inline-block">
                                {{-- <a href="{{ route('post.show', $post->id) }}">read more</a> --}}
                                @can('edit-post')
                                    <a href="{{ route('post.edit', $post->id) }}">Edit</a>
                                @endcan
                                @can('delete-post')
                                    <div class="d-inline-block">
                                        <a href="{{ route('post.destroy', $post->id) }}">Delete</a>
                                    </div>
                                @endcan
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class=" my-6 py-4 text-center">

            <h3> Subscribe Newsletter </h3>
            <div class="my-2">Subscribe my Newsletter for new blog posts , tips and info.</div>
            <form class="d-flex my-3 w-50 m-auto">
                <input type="email" placeholder="email" class="form-control" />
                <button class="btn btn-dark">Subscribe</button>
            </form>


        </div>
    </div>
</x-app-layout>
