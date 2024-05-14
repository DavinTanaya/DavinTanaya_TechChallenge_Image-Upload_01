<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;

Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::get('/create-image', [ImageController::class, 'index'])->name('create.image.form');
Route::post('/post-create-image', [ImageController::class, 'create'])->name('create.image');
Route::delete('/delete-image/{id}', [ImageController::class, 'deleteImage'])->name('delete');