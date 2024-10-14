<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\userController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->resource('post', PostController::class);
Route::middleware('auth')->resource('post/{post}/comment', CommentController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/notifiction', [NotificationController::class, 'index'])->name('notifiction');
});
Route::get('/role', [RoleController::class, 'create']);
Route::post('role', [RoleController::class, 'store'])->name('role');
Route::get('role/edit/{id}', [RoleController::class, 'edit']);
Route::post('role/update/{id}', [RoleController::class, 'update'])->name('role.update');
Route::get('user/edit/{id}', [userController::class, 'edit']);
Route::put('user//update/{id}', [userController::class, 'update'])->name('user.update');

require __DIR__ . '/auth.php';

Route::get('/{pathMatch}', function () {
    return view(('welcome'));
})->where('pathMatch', '.*');