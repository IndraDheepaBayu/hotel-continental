<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\FasilitasumumController;


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
    return view('layouts.main');
});

// user
// akhir-user

// admin
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/kamar', [KamarController::class, 'index'])->name('kamar');
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');
Route::get('/fasilitasumum', [FasilitasumumController::class, 'index'])->name('fasilitasumum');
// akhir-admin

// login
Route::get('/login', [LoginController::class, 'index'])->name('login');

// akhir-login

// kamar
Route::get('/tambahkamar', [KamarController::class, 'create'])->name('tambahkamar');
Route::post('/insertdatakamar', [KamarController::class, 'store'])->name('insertdatakamar');
Route::get('/editkamar/{id}', [KamarController::class, 'edit'])->name('editkamar');
Route::put('/updatedatakamar/{id}', [KamarController::class, 'update'])->name('updatedatakamar');
Route::delete('/deletedatakamar/{id}', [KamarController::class, 'destroy'])->name('deletedatakamar');
// Route::get('/', [KamarController::class, 'index'])->name('');

// akhir-kamar

// fasilitas
Route::get('/tambahfasilitas', [FasilitasController::class, 'create'])->name('tambahfasilitas');
Route::post('/insertdatafasilitas', [FasilitasController::class, 'store'])->name('insertdatafasilitas');
Route::get('/editfasilitas/{id}', [FasilitasController::class, 'edit'])->name('editfasilitas');
Route::put('/updatedatafasilitas/{id}', [FasilitasController::class, 'update'])->name('updatedatafasilitas');
Route::delete('/deletedatafasilitas/{id}', [FasilitasController::class, 'destroy'])->name('deletedatafasilitas');
// akhir-kamar

// fasilitasumum
Route::get('/tambahfasilitasumum', [FasilitasumumController::class, 'create'])->name('tambahfasilitasumum');
Route::post('/insertdatafasilitasumum', [FasilitasumumController::class, 'store'])->name('insertdatafasilitasumum');
Route::get('/editfasilitasumum/{id}', [FasilitasumumController::class, 'edit'])->name('editfasilitasumum');
Route::put('/updatedatafasilitasumum/{id}', [FasilitasumumController::class, 'update'])->name('updatedatafasilitasumum');
Route::delete('/deletedatafasilitasumum/{id}', [FasilitasumumController::class, 'destroy'])->name('deletedatafasilitasumum');
// akhir-fasilitasumum