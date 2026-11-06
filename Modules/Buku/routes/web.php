<?php

use Illuminate\Support\Facades\Route;
use Modules\Buku\Http\Controllers\BukuController;

// Admin: tambah, ubah, hapus
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('buku', BukuController::class)->except(['index', 'show']);
});

// Admin dan user: lihat daftar
Route::middleware(['auth', 'role:admin,user'])->group(function () {
    Route::get('buku', [BukuController::class, 'index'])->name('buku.index');
});