<?php

use App\Http\Controllers\JenisKelasController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SurahQuranController;
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
    return redirect('/login');
});

Auth::routes();


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/kelas', KelasController::class);
    Route::resource('/jenis_kelas', JenisKelasController::class);
    Route::resource('/surah_quran', SurahQuranController::class);
});
