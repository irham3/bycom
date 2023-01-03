<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminCpuController;
use App\Http\Controllers\Admin\AdminGpuController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminCpuSocketController;
use App\Http\Controllers\Admin\AdminMotherboardController;

// Admin Route
Route::prefix('/admin')->group(function() {
  Route::match(['get', 'post'], 'login', [AdminController::class, 'login'])->middleware('adminGuest');
  Route::middleware('admin')->group(function() {
      Route::get('dashboard',[AdminController::class, 'dashboard']);
      Route::get('logout', [AdminController::class, 'logout']);
      Route::match(['get','post'], 'settings', [AdminController::class, 'updateAdminPassword'])->name('updateAdminPassword');
      Route::post('settings/updateAdminImage', [AdminController::class, 'updateAdminImage'])->name('updateAdminImage');

      // Admin Users Route
      Route::get('user/getAllData', [AdminUserController::class,
      'getAllData']);
      Route::resource('user', AdminUserController::class);
      
      // Admin Cpu Socket Sockets Route
      Route::get('cpu-socket/getAllData', [AdminCpuSocketController::class,
      'getAllData']);
      Route::resource('cpu-socket', AdminCpuSocketController::class);

      // Admin Cpu Route
      Route::get('cpu/getAllData', [AdminCpuController::class,
      'getAllData']);
      Route::resource('cpu', AdminCpuController::class);

      // Admin Gpu Route
      Route::get('gpu/getAllData', [AdminGpuController::class,
      'getAllData']);
      Route::resource('gpu', AdminGpuController::class);

      // Admin Motherboard Route
      Route::get('motherboard/getAllData', [AdminMotherboardController::class,
      'getAllData']);
      Route::resource('motherboard', AdminMotherboardController::class);
  });
});