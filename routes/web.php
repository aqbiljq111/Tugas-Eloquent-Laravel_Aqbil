<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DepartemenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan');
Route::post('/karyawan', [KaryawanController::class, 'store'])->name('create');
Route::get('/karyawan/tambah', [KaryawanController::class, 'show'])->name('tambah');
Route::put('/karyawan/{ID}', [KaryawanController::class, 'update'])->name('update');
Route::get('/karyawan/{ID}', [KaryawanController::class, 'edit'])->name('edit');
Route::delete('/karyawan/{ID}', [KaryawanController::class, 'destroy'])->name('delete');
Route::get('/karyawan/cari', [KaryawanController::class, 'cari'])->name('karyawan.cari');
