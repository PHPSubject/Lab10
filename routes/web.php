<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinTucController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [TinTucController::class, 'index'])->name('tin.index');
Route::get('/tin/{id}', [TinTucController::class, 'show'])->name('tin.show');
