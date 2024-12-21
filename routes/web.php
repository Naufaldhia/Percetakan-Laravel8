<?php

use Illuminate\Support\Facades\Route;
// Wajib Digunakan untuk Menjalankan Dashboard
use App\Http\Controllers\PengaturanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [PengaturanController::class, 'index'])->name('dashboard');