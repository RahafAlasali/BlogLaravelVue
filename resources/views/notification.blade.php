<x-app-layout>

    <div>
        <h1>Notification</h1>
        @foreach ($notifications as $notification)
            <div class="card my-3">
                <div class="card-body">
                    <h2>{{ $notification->data['title'] }}</h2>
                    <h4>{{ $notification->data['body'] }}</h4>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
