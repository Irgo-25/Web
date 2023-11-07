<?php

use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route untuk Home
Route::get('Home', function () {
    return view('Home');
});
Route::get('Home', [HomeController::class, 'index']);

// Route Untuk Data Barang
Route::get('Data-Barang', function () {
    return view('Data-Barang');
});
Route::get('Data-Barang', [InventoryController::class, 'index']);

// Route untuk Barcode
Route::get('Barcode', function () {
    return view('Barcode');
});
Route::get('Barcode', [BarcodeController::class, 'index']);

// Route untuk Laporan
Route::get('Laporan', function () {
    return view('Laporan');
});
Route::get('Laporan', [LaporanController::class, 'index']);
