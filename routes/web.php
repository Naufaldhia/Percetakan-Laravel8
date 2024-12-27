<?php

use Illuminate\Support\Facades\Route;
// Wajib Digunakan untuk Menjalankan Dashboard
use App\Http\Controllers\PengaturanController;
use App\Models\Pengaturan;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    $jumlahpegawai = Pengaturan::count();
    $jumlahpegawailembar = Pengaturan::where('jenis_barang','lembar')->count();
    $jumlahpegawairim = Pengaturan::where('jenis_barang','rim')->count();

    return view('welcome', compact('jumlahpegawai','jumlahpegawailembar','jumlahpegawairim'));
});

Route::get('/dashboard', [PengaturanController::class, 'index'])->name('dashboard')->middleware('auth');

// mesti ditambahkan di pengaturanController.php
// untuk menampilkan website
Route::get('/tambahkwitansi', [PengaturanController::class, 'tambahkwitansi'])->name('tambahkwitansi');
// fungsi untuk menambahkan data ke database
Route::post('/insertdata', [PengaturanController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [PengaturanController::class, 'tampilkandata'])->name('tampilkandata');

Route::post('/updatedata/{id}', [PengaturanController::class, 'updatedata'])->name('updatedata');
Route::get('/delete/{id}', [PengaturanController::class, 'delete'])->name('delete');

// Export PDF
Route::get('/exportpdf', [PengaturanController::class, 'exportpdf'])->name('exportpdf');

// Export Excel
Route::get('/exportexcel', [PengaturanController::class, 'exportexcel'])->name('exportexcel');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

Route::get('/register', [LoginController::class, 'register'])->name('register');


Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');