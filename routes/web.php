<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::resource('products', ProductController::class);

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
Route::delete('/cart/cancel/{cart}', [CartController::class, 'cancel'])->name('cart.cancel');
Route::post('/cart/buy', [CartController::class, 'buy'])->name('cart.buy');
