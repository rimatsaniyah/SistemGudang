<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YourController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MutasiController;

// Rute untuk autentikasi
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

// Rute yang memerlukan autentikasi
Route::middleware('auth:sanctum')->group(function () {
    // Rute untuk mendapatkan informasi pengguna yang terautentikasi
    Route::get('user', [AuthController::class, 'user']);

    // Rute untuk CRUD Barang
    Route::get('barangs', [BarangController::class, 'index']);
    Route::post('barangs', [BarangController::class, 'store']);
    Route::get('barangs/{id}', [BarangController::class, 'show']);
    Route::put('barangs/{id}', [BarangController::class, 'update']);
    Route::delete('barangs/{id}', [BarangController::class, 'destroy']);

    // Rute untuk CRUD Mutasi
    Route::get('mutasis', [MutasiController::class, 'index']);
    Route::post('mutasis', [MutasiController::class, 'store']);
    Route::get('mutasis/{id}', [MutasiController::class, 'show']);
    Route::put('mutasis/{id}', [MutasiController::class, 'update']);
    Route::delete('mutasis/{id}', [MutasiController::class, 'destroy']);
});
