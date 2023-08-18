<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UjianController;
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

Route::get('/', [UjianController::class, 'index'])->name('ujian_index');
Route::get('/tambah', [UjianController::class, 'create'])->name('ujian_tambah');
Route::post('/store', [UjianController::class, 'store'])->name('ujian_store');
Route::get('/edit/{ujian}', [UjianController::class, 'edit'])->name('ujian_edit');
Route::put('/edit/{ujian}', [UjianController::class, 'update'])->name('ujian_update');
Route::get('/hapus/{ujian}', [UjianController::class, 'destroy'])->name('ujian_hapus');
Route::get('/cetak', [UjianController::class, 'cetak'])->name('cetak');


