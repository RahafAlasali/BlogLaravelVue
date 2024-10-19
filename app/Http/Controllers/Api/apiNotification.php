<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class apiNotification extends Controller
{
    public function index()
    {
        $user = Auth::guard('api')->user();
        $notification = $user->notifications;
        return response()->json(['data' => $notification]);
    }
}