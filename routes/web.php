<?php

use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\RakitanKuController;
use App\Http\Controllers\SimulatorController;
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

// Beranda
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// Simulasi Rakit PC
Route::get('/simulasi-rakit-pc', [SimulatorController::class, 'index'])->name('simulasi');
Route::post('/simulasi-rakit-pc', [SimulatorController::class, 'saveSimulasi'])->name('saveSimulasi');
Route::post('/simulasi-rakit-pc/{key}', [SimulatorController::class, 'deleteSelectedItem'])->name('hapusItemSimulasi');
Route::post('/simulasi-rakit-pc/addComponent/{table}', [SimulatorController::class, 'addComponent']);
Route::post('/simulasi-rakit-pc/addComponent/{table}/{id}', [SimulatorController::class, 'addComponentItem']);

// Marketplace
Route::get('/marketplace', [MarketplaceController::class, 'index'])->name('marketplace');
Route::get('/marketplace/{table}', [MarketplaceController::class, 'category']);
Route::get('/marketplace/{table}/{id}', [MarketplaceController::class, 'detailComponent']);

Route::middleware('auth')->group(function () {
    // RakitanKu
    Route::get('/rakitanku', [RakitanKuController::class, 'index'])->name('rakitanku');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
