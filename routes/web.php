<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('home');
});

Route::view('/tentang', 'tentang');
Route::view('/partner', 'partner');

Route::get('/foto', [FotoController::class, 'showGallery'])->name('foto.gallery');

Route::get('/kontak', function () {
    return view('contact');
});

Route::get('/member/join', [AuthController::class, 'showRegister'])->name('register.form')->middleware('guest');
Route::post('/member/join', [AuthController::class, 'register'])->name('register');

Route::get('/member/login', [AuthController::class, 'showLogin'])->name('login.form')->middleware('guest');
Route::post('/member/login', [AuthController::class, 'login'])->name('login');

Route::middleware(['auth.custom'])->group(function () {
    Route::get('/member', [FotoController::class, 'index'])->name('dashboard');

    Route::post('/member/foto/store', [FotoController::class, 'store'])->name('foto.store');
    Route::post('/member/foto/update/{id}', [FotoController::class, 'update'])->name('foto.update');
    Route::delete('/member/foto/delete/{id}', [FotoController::class, 'destroy'])->name('foto.delete');

    Route::post('/member/logout', [AuthController::class, 'logout'])->name('logout');
});