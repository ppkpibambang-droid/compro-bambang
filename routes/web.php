<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('welcome');
});

// Route 
Route::get('/belajar', [App\Http\Controllers\BelajarController::class, 'index']);
Route::get('aritmatika', [App\Http\Controllers\BelajarController::class, 'create']);
Route::get('aritmatika/tambah', [App\Http\Controllers\BelajarController::class, 'tambah'])->name('aritmatika.tambah');
Route::get('aritmatika/kurang', [App\Http\Controllers\BelajarController::class, 'kurang'])->name('aritmatika.kurang');
Route::get('aritmatika/kali', [App\Http\Controllers\BelajarController::class, 'kali'])->name('aritmatika.kali');
Route::get('aritmatika/bagi', [App\Http\Controllers\BelajarController::class, 'bagi'])->name('aritmatika.bagi');

Route::post('tambah-action', [App\Http\Controllers\BelajarController::class, 'tambahAction'])->name('tambah-action');
Route::post('kurang-action', [App\Http\Controllers\BelajarController::class, 'kurangAction'])->name('kurang-action');
Route::post('kali-action', [App\Http\Controllers\BelajarController::class, 'kaliAction'])->name('kali-action');
Route::post('bagi-action', [App\Http\Controllers\BelajarController::class, 'bagiAction'])->name('bagi-action');