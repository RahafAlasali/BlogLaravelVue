<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
class apiRoleController extends Controller
{
    public function index()
    {
        $role = Role::all();
        return response()->json($role);
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