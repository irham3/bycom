<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\RakitanKuController;
use App\Http\Controllers\SimulasiController;
use Illuminate\Support\Facades\Route;

// Beranda
Route::get('/', [BerandaController::class, 'index'])->name('beranda');

// Simulasi Rakit PC
Route::get('/simulasi-rakit-pc', [SimulasiController::class, 'index'])->name('simulasi');
Route::post('/simulasi-rakit-pc', [SimulasiController::class, 'saveSimulasi'])->name('saveSimulasi');
Route::post('/simulasi-rakit-pc/{key}', [SimulasiController::class, 'deleteSelectedItem'])->name('hapusItemSimulasi');
Route::post('/simulasi-rakit-pc/addComponent/{table}', [SimulasiController::class, 'addComponent']);
Route::post('/simulasi-rakit-pc/addComponent/{table}/{id}', [SimulasiController::class, 'addComponentItem']);

// Katalog
Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog');
Route::get('/katalog/{table}', [KatalogController::class, 'category']);
Route::get('/katalog/{table}/{id}', [KatalogController::class, 'detailComponent']);

Route::middleware('auth')->group(function () {
    // RakitanKu
    Route::get('/rakitanku', [RakitanKuController::class, 'index'])->name('rakitanku');
});

// Pengguna yang tidak login maupun selain pemilik rakitan masih bisa liat detail rakitan
Route::get('/rakitanku/{code}', [RakitanKuController::class, 'detailRakitan']);

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
