<?php

use App\Http\Controllers\Api\apiPermissionController;
use App\Http\Controllers\Api\apiRoleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\apiPostController;
use App\Http\Controllers\Api\apiCommentController;
use App\Http\Controllers\Api\apiCategoryController;
use App\Http\Controllers\AuthController;
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

    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);

    Route::post('me', [AuthController::class, 'me']);

});

Route::middleware('auth:api')->post('register', [AuthController::class, 'register']);

// Route::middleware('auth:api')->apiResource('post', apiPostController::class);
Route::apiResource('post', apiPostController::class);
Route::apiResource('role', apiRoleController::class);
Route::apiResource('permission', apiPermissionController::class);
Route::apiResource('category', apiCategoryController::class);
//['auth:api', 'can:Admin']
// Route::middleware('auth:api')->apiResource('comment', apiCommentController::class);
Route::apiResource('post/{post}/comment', apiCommentController::class);


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});