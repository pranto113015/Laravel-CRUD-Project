<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/create', [PostController::class, 'create']);

Route::post('/create', [PostController::class, 'ourfilestore'])->name('store');
