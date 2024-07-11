<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EnvioController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/envios',EnvioController::class);
Route::apiResource('/proveedores',ProveedorController::class);
Route::apiResource('/empleados',EmpleadoController::class);
Route::apiResource('/categorias',CategoriaController::class);
Route::apiResource('/directores',DirectorController::class);
Route::apiResource('/paises',PaisController::class);
Route::apiResource('/productos',ProductoController::class);



