<?php

use App\Http\Controllers\api\CategoriaController;
use App\Http\Controllers\api\PaymodeController;
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

Route::get('/paymodes', [PaymodeController::class, 'index'])->name('paymodes');
Route::post('/paymodes', [PaymodeController::class, 'store'])->name('paymodes.store');
Route::delete('/paymodes/{paymode}', [PaymodeController::class, 'destroy'])->name('paymodes.destroy');
Route::get('/paymodes/{paymode}', [PaymodeController::class, 'show'])->name('paymodes.show');
Route::put('/paymodes/{paymode}', [PaymodeController::class, 'update'])->name('paymodes.update');