<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BukuController;



Route::get('/', function () {
    return view('auth.login');
});


Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/penerbit', [PenerbitController::class, 'index']);
Route::post('/penerbit/store', [PenerbitController::class, 'store']);
Route::get('/penerbit/{id}/edit', [PenerbitController::class, 'edit']);
Route::put('/penerbit/{id}', [PenerbitController::class, 'update']);
Route::get('/penerbit/{id}', [PenerbitController::class, 'destroy']);

Route::resource('/anggota', AnggotaController::class);


Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    
    Route::get('/category', [CategoryController::class, 'index']);
    Route::post('/category/store', [CategoryController::class, 'store']);
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit']);
    Route::put('/category/{id}', [CategoryController::class, 'update']);
    Route::get('/category/{id}', [CategoryController::class, 'destroy']);

    Route::resource('/buku', BukuController::class);
     Route::get('/buku', [BukuController::class, 'index']);
    Route::post('/buku/store', [BukuController::class, 'store']);
    Route::get('/buku/{id}/edit', [BukuController::class, 'edit']);
    Route::put('/buku/{id}', [BukuController::class, 'update']);
    Route::get('/buku/{id}', [BukuController::class, 'destroy']);
});
