<?php

use Illuminate\Support\Facades\Route;

//import product controller
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return redirect('/products');
});

//route resource for products
Route::resource('/products', ProductController::class);

Route::get('/welcome', function () {
    return view('welcome');
});
