<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');



// Katalog
Route::get('/katalog', function () {
    return view('katalog');
})->name('katalog');

use App\Http\Controllers\CartController;

Route::get('/cart', [CartController::class, 'show'])->name('cart.show');

