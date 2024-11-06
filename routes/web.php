<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);

Route::get('/about', function () {
    return view('about');
})->name('about');
