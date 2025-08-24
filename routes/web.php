<?php

use App\Http\Controllers\DanaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DanaController::class, 'index'])->name('home');
Route::get('/dorprize', [DanaController::class, 'dorprize'])->name('dorprize');
Route::get('/login', [DanaController::class, 'create'])->name('login');
Route::post('/claim', [DanaController::class, 'store'])->name('claim');
