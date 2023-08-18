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

Route::get('/','UjianController@get')
->name('ujian_index');
Route::post('/','UjianController@create')
->name('ujian_tambah');
Route::get('/edit/{id}','UjianController@find')
->name('ujian_edit');
Route::put('/edit/{id}','UjianController@update')
->name('ujian_update');
Route::get('/hapus/{id}','UjianController@delete')
->name('ujian_hapus');
Route::get('/cetak','UjianController@cetak')
->name('cetak');

