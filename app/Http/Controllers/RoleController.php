<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:edit-post'])->only(['edit', 'store']);
    }
    public function create()
    {

        $permissions = Permission::all();
        return view('role.create', ['permissions' => $permissions]);
    }
    public function edit($id)
    {
        $role = Role::find($id);

        $permissions = Permission::all();
        return view('role.edit', ['role' => $role, 'permissions' => $permissions]);
    }
    public function store(Request $req)
    {
        $name = $req->name;
        $role = Role::create(['name' => $name]);
        $role->givePermissionTo($req->permissions);
        return redirect('/');
    }
    public function update(Request $req, $id)
    {
        $role = Role::find($id);
        $role->name = $req->name;
        $role->save();
        $role->syncPermissions($req->permissions);
        return redirect('post');
    }
}