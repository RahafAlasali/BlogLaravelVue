<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiPostController;
use App\Http\Controllers\authController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::group([

    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [authController::class ,'login']);
    Route::post('logout', [authController::class ,'logout']);
    Route::post('refresh', [authController::class ,'refresh']);
 
    Route::post('me', [authController::class,'me']);

});

Route::post('register', [AuthController::class ,'register']);

Route::middleware('auth:api')->apiResource('post',apiPostController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});