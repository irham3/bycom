<?php

use App\Http\Controllers\Admin\AdminBuildRecommendationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminCpuController;
use App\Http\Controllers\Admin\AdminGpuController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminCpuSocketController;
use App\Http\Controllers\Admin\AdminUserBuildController;
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
      Route::get('user/getAllDatatable', [AdminUserController::class,
      'getAllDatatable']);
      Route::resource('user', AdminUserController::class);
      
      // Admin CpuSocket Route
      Route::get('processor-socket/getAllDatatable', [AdminCpuSocketController::class,
      'getAllDatatable']);
      Route::resource('processor-socket', AdminCpuSocketController::class);

      // Admin Cpu Route
      Route::get('cpu/getAllDatatable', [AdminCpuController::class,
      'getAllDatatable']);
      Route::resource('cpu', AdminCpuController::class);

      // Admin Gpu Route
      Route::get('gpu/getAllDatatable', [AdminGpuController::class,
      'getAllDatatable']);
      Route::resource('gpu', AdminGpuController::class);

      // Admin InternalStorage Route
      Route::get('internal-storage/getAllDatatable', [AdminInternalStorageController::class,
      'getAllDatatable']);
      Route::resource('internal-storage', AdminInternalStorageController::class);

      // Admin Motherboard Route
      Route::get('motherboard/getAllDatatable', [AdminMotherboardController::class,
      'getAllDatatable']);
      Route::resource('motherboard', AdminMotherboardController::class);

      // Admin PcCase Route
      Route::get('case/getAllDatatable', [AdminPcCaseController::class,
      'getAllDatatable']);
      Route::resource('case', AdminPcCaseController::class);

      // Admin PowerSupply Route
      Route::get('psu/getAllDatatable', [AdminPowerSupplyController::class,
      'getAllDatatable']);
      Route::resource('psu', AdminPowerSupplyController::class);

      // Admin Memory Route
      Route::get('memory/getAllDatatable', [AdminMemoryController::class,
      'getAllDatatable']);
      Route::resource('memory', AdminMemoryController::class);
      
      // Admin User Build
      // Hanya bisa lihat datanya, tidak ada modifikasi data
      Route::get('custom-build/getAllDatatable', [AdminUserBuildController::class,
      'getAllDatatable']);
      Route::get('custom-build', [AdminUserBuildController::class, 'index']);

      // Admin Build Recommendation Route
      Route::get('pc-recommendation/getAllDatatable', [AdminBuildRecommendationController::class,
      'getAllDatatable']);
      Route::resource('pc-recommendation', AdminBuildRecommendationController::class);
    });
  });