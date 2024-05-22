<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
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


Route::get('/',[HomeController::class,'index'])->name('home');

// siswa
Route::get('/siswa',[SiswaController::class,'siswa'])->name('siswa');
Route::get('/siswa/tambah',[SiswaController::class,'tambah'])->name('siswa_tambah');
Route::post('/siswa/aksi_tambah',[SiswaController::class,'aksi_tambah'])->name('aksi_tambah_siswa');
// kelas
Route::get('/kelas',[KelasController::class,'index'])->name('kelas');
Route::get('/kelas/tambah',[KelasController::class,'tambah'])
->name('tambah_kelas');
Route::post('kelas/aksi_tambah',[KelasController::class,'aksi_tambah'])
->name('aksi_tambah')
;
Route::get('kelas/edit/{id}',[KelasController::class,'edit'])
->name('edit')
;
Route::post('kelas/hapus/{id}',[KelasController::class,'hapus'])
->name('hapus')
;



