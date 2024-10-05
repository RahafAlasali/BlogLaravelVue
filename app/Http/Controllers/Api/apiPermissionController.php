<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class apiPermissionController extends Controller
{
    public function index()
    {
        $permission = Permission::all();
        return response()->json($permission);
    }
}