<x-app-layout>

    <div class="row ">
        <div class=" my-2 col-md-5 mx-auto">
            <div class="my-2 py-2">
                <h2>{{ $post->title }}</h2>
            </div>
            <div class="">
                @if ($post->image)
                    <img class="img-fluid text-center" src="{{ asset('images/' . $post->image) }}" alt="">
                @else
                    <img class=" img-fluid" src="https://demo.themefisher.com/revolve-bootstrap/images/news/f2.jpg"
                        style="max-height: 300px" alt="">
                @endif
            </div>

            <div class="mt-3 py-2">
                <p> {{ $post->description }}</p>
            </div>
            <hr>
            @if (count($post->comment))
                <div class="mt-4">
                    <h3>Comment</h3>
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

        </div>
    </div>
</x-app-layout>
