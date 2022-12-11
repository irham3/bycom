<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminUserController;

// Admin Route
Route::prefix('/admin')->namespace('App\HTTP\Controllers\Admin')->group(function() {
  Route::match(['get', 'post'], 'login', [AdminController::class, 'login'])->middleware('adminGuest');
  Route::middleware('admin')->group(function() {
      Route::get('dashboard',[AdminController::class, 'dashboard']);
      Route::get('logout', [AdminController::class, 'logout']);
      Route::match(['get','post'], 'update-admin-password', [AdminController::class, 'updateAdminPassword']);

      // Admin Users Route
      Route::get('users', [AdminUserController::class, 'index']);
      Route::get('/getAllUsers', [AdminUserController::class,
      'getAllUsers']);
  });
});