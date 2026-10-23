<?php

use App\Http\Controllers\ToyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ToyController::class, 'home'])->name('home');
Route::get('/katalog', [ToyController::class, 'index'])->name('toy.index');
Route::view('/tentang', 'about')->name('about');
Route::view('/kontak', 'contact')->name('contact');
Route::get('/toy/{toy}', [ToyController::class, 'show'])->name('toy.show');