<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin Route
Route::prefix('/admin')->namespace('App\HTTP\Controllers\Admin')->group(function() {
    Route::match(['get', 'post'], 'login', [AdminUserController::class,'login']);
    Route::middleware('admin')->group(function() {
        Route::get('dashboard',[AdminController::class, 'index']);
        Route::get('logout', [AdminUserController::class, 'logout']);
    });
});

// Route::get('login', [AdminUserController::class,'create']);
// Route::post('login',[AdminUserController::class,'store']);