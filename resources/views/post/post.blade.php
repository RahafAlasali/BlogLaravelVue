<x-app-layout>

    <div class="row ">
        <div class="text-center my-2 col-9 mx-auto">
            <img class="img-fluid" src="{{ asset('images/'.$post->image)}}" alt="">
            <p style="font-weight:bold; font-size:x-large"> {{$post->title}}</p>

            <p style=" font-size:x-large"> {{ $post->description}}</p>
            <div>
                <h4>Comment</h4>
                <p>

                    @foreach($post->comment as $comment)
                <p>
                    {{$comment->description }}
                </p>
                @endforeach

                </p>
            </div>
        </div>
    </div>
</x-app-layout>