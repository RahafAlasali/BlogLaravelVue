<x-app-layout>
    <div>
        <div class="row">
            <div class="col-6 mx-auto bg-white  border-gray-100">
                <form action="{{ route('role.update', $role->id) }}" method="POST" class="pa-4" style="padding:30px">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="name" class="form-label"> Role</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ $role->name }}">
                    </div>
                    <div class="my-3">Permission</div>
                    {{-- {{ $role->permissions }} --}}
                    @foreach ($permissions as $permission)
                        <div class="form-check">

                            <input type="checkbox" name="permissions[]" value="{{ $permission->name }} ">

                            <label>{{ $permission->name }} </label>
                        </div>
                    @endforeach

                    <button type="submit" class="btn btn-primary my-4">Edit</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
