<?php

use Illuminate\Support\Facades\Route;
// Wajib Digunakan untuk Menjalankan Dashboard
use App\Http\Controllers\PengaturanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [PengaturanController::class, 'index'])->name('dashboard');

// mesti ditambahkan di pengaturanController.php
// untuk menampilkan website
Route::get('/tambahkwitansi', [PengaturanController::class, 'tambahkwitansi'])->name('tambahkwitansi');
// fungsi untuk menambahkan data ke database
Route::post('/insertdata', [PengaturanController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/[id]', [PengaturanController::class, 'tampilkandata'])->name('tampilkandata');