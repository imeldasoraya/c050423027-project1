<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

//route resource for products
Route::resource('/products', \App\Http\Controllers\ProductController::class);

Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');