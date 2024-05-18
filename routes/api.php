<?php

use App\Http\Controllers\api\CategoriaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
Route::delete('/categorias/{categorias}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');
Route::get('/categorias/{categorias}', [CategoriaController::class, 'show'])->name('categorias.show');
Route::put('/categorias/{categorias}', [CategoriaController::class, 'update'])->name('categorias.update');
