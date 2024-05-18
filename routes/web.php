<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PaymodeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//Ruta categorias
 Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
 Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
 Route::get('/categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
 Route::delete('/categorias/{categoria}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');
 Route::put('/categorias/{categoria}', [CategoriaController::class, 'update'])->name('categorias.update');
 Route::get('/categorias/{categoria}/edit', [CategoriaController::class, 'edit'])->name('categorias.edit');

 //Ruta paymode
 Route::get('/paymodes', [PaymodeController::class,'index'])->name('paymodes.index');
Route::post('/paymodes', [PaymodeController::class, 'store'])->name('paymodes.store');
Route::get('/paymodes/create', [PaymodeController::class, 'create'])->name('paymodes.create');
Route::delete('/paymodes/{paymode}', [PaymodeController::class, 'destroy'])->name('paymodes.destroy');
Route::put('/paymodes/{paymode}', [PaymodeController::class, 'update'])->name('paymodes.update');
Route::get('/paymodes/{paymode}/edit', [PaymodeController::class, 'edit'])->name('paymodes.edit');

//Rutas Customers

Route::get('/customers', [CustomerController::class,'index'])->name('customers.index');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');
Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');

//Ruta productos
Route::get('/Productos',[ProductoController::class,'index'])->name('products.index');
Route::post('/Productos', [ProductoController::class, 'store'])->name('products.store');
Route::get('/Productos/create', [ProductoController::class, 'create'])->name('products.create');
Route::delete('/Productos/{producto}', [ProductoController::class, 'destroy'])->name('products.destroy');
Route::put('/Productos/{producto}', [ProductoController::class, 'update'])->name('products.update');
Route::get('/Productos/{producto}/edit', [ProductoController::class, 'edit'])->name('products.edit');
});



require __DIR__.'/auth.php';
