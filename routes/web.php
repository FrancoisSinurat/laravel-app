<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang/add', function () {
    return view('barang/add');
});
Route::post('/barang/add', [BarangController::class, 'add']);
Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
Route::post('/barang/update', [BarangController::class, 'update']);
Route::get('/barang/hapus/{id}', [BarangController::class, 'hapus'])->name('barang/hapus');
