<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
class userController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:edit-user'])->only(['edit', 'store']);
    }
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view('user.edit', ['user' => $user, 'roles' => $roles]);
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->syncRoles($request->role);
        return redirect()->back();
    }
}