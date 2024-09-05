@extends('layout')
@section('title', 'user')
@section('content')
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="name" class="form-label"> Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
        <label for="email" class="form-label"> Email</label>
        <input type="text" name="email" id="email" class="form-control" value="{{ $user->email }}">
        <label for="role" class="form-label">Role:</label>
        {{ $user->getRoleNames() }}

        <div>
            <select name="role[]" id="role" multiple class="form-control">
                @foreach ($roles as $role)
                    <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                        {{ $role->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-outline-primary my-4">Update</button>
    </form>
@endsection
