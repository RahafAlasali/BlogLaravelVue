<x-app-layout>

    <div class="row ">
        <div class=" my-2 col-md-6 mx-auto">
            <img class="img-fluid text-center" src="{{ asset('images/' . $post->image) }}" alt="">
            @if ($post->image)
                <img class="img-fluid text-center" src="{{ asset('images/' . $post->image) }}" alt="">
            @else
                <img class=" card-img-top" src="https://placehold.co/200x100?text=Image" alt="">
            @endif


            <div style=" font-size:x-large ">
                <p> {{ $post->description }}</p>
            </div>
            <hr>
            @if (count($post->comment))
                <div class="mt-4">
                    <h3>Comment</h3>
                    <p>

                        @foreach ($post->comment as $comment)
                            <div class="row pt-3 align-items-center">
                                <div class="col-2  ">
                                    <img src="https://cdn.vuetifyjs.com/images/lists/2.jpg" class="rounded-circle"
                                        width="60" style="height:60px" alt="">
                                </div>
                                <p class="col-6">
                                    {{ $comment->description }}
                                </p>
                            </div>
                        @endforeach

                    </p>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
