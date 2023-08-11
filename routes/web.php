<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/',[MahasiswaController::class, 'index']);

Route::resource('/mahasiswa','MahasiswaController')->except(['show']);
Route::post('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/mahasiswa/data', [MahasiswaController::class, 'data'])->name('mahasiswa.data');
Route::get('/mahasiswa/input', [MahasiswaController::class, 'input'])->name('mahasiswa.input');
Route::post('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::get('/mahasiswa/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::post('/mahasiswa/update', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('/mahasiswa/destroy/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');


