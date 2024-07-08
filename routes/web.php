<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurahController;
use App\Http\Controllers\DoaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;





Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->middleware('auth')->name('profile');
    Route::get('/profileEdit', [HomeController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [HomeController::class, 'update'])->name('profile.update');
    Route::get('/surah', [SurahController::class, 'index'])->name('surah');
Route::get('/surah/{id}', [SurahController::class, 'show'])->name('surah.show');
Route::get('/doa', [DoaController::class, 'index'])->name('doa');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');