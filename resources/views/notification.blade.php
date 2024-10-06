<x-app-layout>
    <div class="my-4">
        <div class="row">
            <div class="col-md-8">
                <h1>Notification</h1>
                @foreach ($notifications as $notification)
                    <div class="card my-3">
                        <a href="{{ $notification->data['URL'] }}">
                            <div class="card-body">
                                <div class="card-title">
                                    <h2>{{ $notification->data['title'] }}</h2>
                                </div>

                                <div class="card-text">
                                    <h4>{{ $notification->data['body'] }}</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
