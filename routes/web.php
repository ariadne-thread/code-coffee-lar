<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', CoffeeController::class);

Route::get('products/insert', [ProductController::class, 'create'])->name('products.insert');

Route::get('products/{name}', [ProductController::class, 'show'])->name('products.description');

Route::get('products', [ProductController::class, 'index'])->name('products');

Route::POST('products', [ProductController::class, 'insert'])->name('insert.products');

Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

Route::PUT('products/{product}', [ProductController::class, 'editing'])->name('products.editing');

Route::delete('products/{product}/delete', [ProductController::class, 'delete'])->name('products.delete');
