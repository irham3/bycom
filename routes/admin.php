<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminCpuController;
use App\Http\Controllers\Admin\AdminUserController;

// Admin Route
Route::prefix('/admin')->group(function() {
  Route::match(['get', 'post'], 'login', [AdminController::class, 'login'])->middleware('adminGuest');
  Route::middleware('admin')->group(function() {
      Route::get('dashboard',[AdminController::class, 'dashboard']);
      Route::get('logout', [AdminController::class, 'logout']);
      Route::match(['get','post'], 'settings', [AdminController::class, 'updateAdminPassword'])->name('updateAdminPassword');
      Route::post('settings/updateAdminImage', [AdminController::class, 'updateAdminImage'])->name('updateAdminImage');

      // Admin Users Route
      Route::get('users', [AdminUserController::class, 'index']);
      Route::get('user/getAllUsers', [AdminUserController::class,
      'getAllUsers']);
      Route::post('user/update', [AdminUserController::class, 'update'])->name('updateAdminUser');
      Route::resource('user', AdminUserController::class);
      
      // Admin Users Route
      Route::get('cpus', [AdminCpuController::class, 'index']);
      Route::get('user/getAllCpus', [AdminCpuController::class,
      'getAllCpus']);
      Route::post('user/update', [AdminCpuController::class, 'update'])->name('updateAdminCpu');
      Route::resource('user', AdminCpuController::class);
  });
});