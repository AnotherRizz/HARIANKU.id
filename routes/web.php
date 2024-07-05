<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurahController;
use App\Http\Controllers\DoaController;

Route::get('/', function () {
    return view('content.home');
})->name('home');


Route::get('/zikir', function () {
    return view('content.zikir');
})->name('zikir');

Route::get('/surah', [SurahController::class, 'index'])->name('surah');
Route::get('/surah/{id}', [SurahController::class, 'show'])->name('surah.show');
Route::get('/doa', [DoaController::class, 'index'])->name('doa');