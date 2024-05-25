<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RumahsakitController;
use App\Http\Controllers\SistemPakarController;

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


// halaman utama
Route::get('/index', function() {
    return view('index');
});

// sistem pakar
Route::get('/sistem-pakar',[SistemPakarController::class, 'sistempakar']);
Route::get('/sistem-pakar/{penyakit}',[SistemPakarController::class, 'formpenyakit']);
Route::post('/sistem-pakar/{penyakit}',[SistemPakarController::class, 'postgejala']);

// Rumah sakit
Route::get('/provinsi',[RumahsakitController::class, 'index']);
Route::get('/provinsi/{id}',[RumahsakitController::class, 'kabkot']);
Route::get('/provinsi/{idprop}/rumahsakit/{idrumahsakit}',[RumahsakitController::class, 'rumahsakit']);

// Tentang
Route::get('/tentang', function() {
    return view('tentang');
});

// Blog kesehatan
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{id}', [BlogController::class, 'baca']);
Route::get('/hapus/{id}', [BlogController::class, 'hapus'])->middleware('auth');
Route::get('/tambah', function() {
    return view('/blog/tambah');
})->middleware('auth');

// Login
Route::get('/login', [AdminController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[AdminController::class, 'cek']);
Route::post('/tambah', [BlogController::class, 'tambah'])->middleware('auth');
Route::get('/logout', [AdminController::class, 'logout'])->middleware('auth');
