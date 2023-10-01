<?php

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

Route::get('/Home', function () {
    return view('Home');
});
Route::get('/Data-Barang', function () {
    return view('Data-Barang');
});
Route::get('/Barcode', function () {
    return view('Barcode');
});
Route::get('/Laporan', function () {
    return view('Laporan');
});
