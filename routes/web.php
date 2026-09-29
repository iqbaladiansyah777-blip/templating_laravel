<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\AuthController;

// Rute Publik (Bebas diakses)
Route::get('/', function () {
    return view('frontend'); 
});
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/post-login', [AuthController::class, 'authenticate']);

// Rute Privat (Wajib Login)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin'); // Pastikan sesuai dengan file admin.blade.php kamu
    });
    
    // Ini bagian "Resource" Laravel yang sudah kita kerjakan
    Route::resource('/karyawan', KaryawanController::class);
    
    Route::post('/logout', [AuthController::class, 'logout']);
});