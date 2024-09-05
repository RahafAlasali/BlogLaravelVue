<x-app-layout>

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
            <div class="col-4 my-2">

                <div class="card w-100" style="width: 18rem; min-height: 410px">
                    <div style="min-height: 180px">
                        @if ($post->image)
                            <img class=" card-img-top" src="{{ asset('images/' . $post->image) }}" alt="">
                        @else
                            <img class=" card-img-top" src="https://placehold.co/200x100?text=Image" alt="">
                        @endif
                    </div>
                    <div class="card-body  d-flex flex-column " style="justify-content:space-between">
                        <div>
                            <h5 class="card-title"> {{ $post->title }}</h5>
                            <p class="card-text">{{ $post->description }}</p>
                        </div>
                        <div class="justify-content-end d-inline-block">
                            <a href="{{ route('post.show', $post->id) }}">read more</a>
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
    </div>
</x-app-layout>
