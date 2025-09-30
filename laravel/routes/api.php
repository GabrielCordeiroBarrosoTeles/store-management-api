<?php


use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::apiResource('/anuncios', AnuncioController::class);
Route::apiResource('/clientes', ClienteController::class);
Route::apiResource('/estoques', EstoqueController::class);
Route::apiResource('/usuarios', UsuarioController::class);
