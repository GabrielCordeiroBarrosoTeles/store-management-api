<?php

use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/users', UserController::class);


Route::apiResource('/anuncios', AnuncioController::class)->name('Anuncios', 'x');
Route::get('/categorias', [CategoryController::class, 'getAll'])->name('Categorias', 'y');
