<x-app-layout>
    <div>
        <div class="row">
            <div class="col-6 mx-auto bg-white  border-gray-100">
                <form action="{{ route('role') }}" method="POST" class="pa-4" style="padding:30px">
                    @csrf
                    <div>
                        <label for="name" class="form-label"> Role</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="my-3">Permission</div>
                    @foreach ($permissions as $permission)
                        <div class="form-check">

                            <input type="checkbox" name="permissions[]" value="{{ $permission->name }}">
                            <label>{{ $permission->name }} </label>
                        </div>
                    @endforeach

                    <button type="submit" class="btn btn-primary my-4">Create</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
