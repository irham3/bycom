<?php

use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/simulasi-rakit-pc', [SimulatorController::class, 'index']);
Route::get('/marketplace', [MarketplaceController::class, 'index']);
Route::get('/marketplace/{table}', [MarketplaceController::class, 'category']);

Route::middleware('auth')->group(function () {
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
