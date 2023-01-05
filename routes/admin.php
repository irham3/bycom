<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminCpuController;
use App\Http\Controllers\Admin\AdminGpuController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminCpuSocketController;
use App\Http\Controllers\Admin\AdminPcBuildController;
use App\Http\Controllers\Admin\AdminInternalStorageController;
use App\Http\Controllers\Admin\AdminMemoryController;
use App\Http\Controllers\Admin\AdminMotherboardController;
use App\Http\Controllers\Admin\AdminPcCaseController;
use App\Http\Controllers\Admin\AdminPowerSupplyController;

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
      
      // Admin CpuSocket Route
      Route::get('processor-socket/getAllData', [AdminCpuSocketController::class,
      'getAllData']);
      Route::resource('processor-socket', AdminCpuSocketController::class);

      // Admin Cpu Route
      Route::get('cpu/getAllData', [AdminCpuController::class,
      'getAllData']);
      Route::resource('cpu', AdminCpuController::class);

      // Admin Gpu Route
      Route::get('gpu/getAllData', [AdminGpuController::class,
      'getAllData']);
      Route::resource('gpu', AdminGpuController::class);

      // Admin InternalStorage Route
      Route::get('internal-storage/getAllData', [AdminInternalStorageController::class,
      'getAllData']);
      Route::resource('internal-storage', AdminInternalStorageController::class);

      // Admin Motherboard Route
      Route::get('motherboard/getAllData', [AdminMotherboardController::class,
      'getAllData']);
      Route::resource('motherboard', AdminMotherboardController::class);

      // Admin PcCase Route
      Route::get('case/getAllData', [AdminPcCaseController::class,
      'getAllData']);
      Route::resource('case', AdminPcCaseController::class);

      // Admin PowerSupply Route
      Route::get('psu/getAllData', [AdminPowerSupplyController::class,
      'getAllData']);
      Route::resource('psu', AdminPowerSupplyController::class);

      // Admin Memory Route
      Route::get('memory/getAllData', [AdminMemoryController::class,
      'getAllData']);
      Route::resource('memory', AdminMemoryController::class);

      // Admin Memory Route
      Route::get('full-pc-build/detail/getAllDetailData', [AdminPcBuildController::class,
      'getAllDetailData']);
      Route::get('full-pc-build/getAllData', [AdminPcBuildController::class,
      'getAllData']);
      Route::resource('full-pc-build', AdminPcBuildController::class);
  });
});