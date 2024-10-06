<x-app-layout>
    <div class="px-2">
        <div class="d-flex justify-end">
            {{-- @if (Gate::allows('create-post'))
                <a href="{{ route('post.create') }}"> Create</a>
            @endif --}}
            @if (auth()->user()->hasAnyPermission(['create-post']))
                <a href="{{ route('post.create') }}"> Create</a>
            @endif
        </div>
        {{-- category --}}
        <div class="d-flex justify-center my-3">
            @foreach ($categories as $category)
                <a href="{{ route('post.index', ['category' => $category->id]) }}">
                    <button type="button" class="btn btn-outline-secondary mx-2">{{ $category->name }}</button>
                </a>
            @endforeach
        </div>
        <div class="row  row-cols-md-3 g-4">
            @foreach ($posts as $post)
                <div class="col">
                    <div class="card bg-transparent" style="width: 18rem; min-height: 150px;border:none">
                        <a href="{{ route('post.show', $post->id) }}" class="">
                            <div style="border-radius: 6px">
                                @if ($post->image)
                                    <img class=" card-img-top img-fluid w-100"
                                        src="{{ asset('images/' . $post->image) }}" alt="">
                                @else
                                    <img class=" card-img-top"
                                        src="https://cdn.prod.website-files.com/61228f5f1250b11665938f6a/6122b12aadcedb20221d5781_1629663529921-image19.jpg"
                                        alt="">
                                @endif
                            </div>
                            <div class="card-body px-0 d-flex flex-column " style="justify-content:space-between">
                                <div>
                                    <div class="pb-2"
                                        style="font-family: Montserrat; color: rgb(123, 78, 228);font-size: 20px">
                                        {{ $post->category->name }}
                                    </div>
                                    <h5 class="card-title">
                                        {{ $post->title }}

                                    </h5>
                                    <span class="text-muted letter-spacing  font-sm "
                                        style="font-family: Montserrat">{{ $post->created_at->format('M d,Y') }}</span>
                                </div>
                        </a>
                        {{-- <div class="justify-content-end d-inline-block">

                                @can('edit-post')
                                    <a href="{{ route('post.edit', $post->id) }}">Edit</a>
                                @endcan
                                @can('delete-post')
                                    <div class="d-inline-block">
                                        <a href="{{ route('post.destroy', $post->id) }}">Delete</a>
                                    </div>
                                @endcan
                            </div> --}}

                    </div>
                </div>
        </div>
        @endforeach
    </div>
    <div class="mt-4 d-flex justify-center">

        {{ $posts->withQueryString()->links() }}
    </div>
    </div>
    {{-- component  subscribe --}}
    <div class=" py-6  text-center">

        <h3> Subscribe Newsletter </h3>
        <div class="my-2">Subscribe my Newsletter for new blog posts , tips and info.</div>
        <form class="d-flex my-3 w-50 m-auto">
            <input type="email" placeholder="Email" class="form-control" />
            <button class="btn btn-dark">Subscribe</button>
        </form>


    </div>
    </div>
</x-app-layout>
