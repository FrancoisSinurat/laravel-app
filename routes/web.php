<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Models\Kategori;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

//barang field
Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang/add', function () {
    $kategoris = Kategori::all();
    return view('barang/add', compact('kategoris'));
});
Route::post('/barang/add', [BarangController::class, 'add']);
Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
Route::post('/barang/update', [BarangController::class, 'update']);
Route::get('/barang/hapus/{id}', [BarangController::class, 'hapus'])->name('barang/hapus');

//kategori field
Route::get('/kategori', [KategoriController::class, 'index']);

//jenis field
Route::get('/jenis', [JenisController::class, 'index']);

// upload field
