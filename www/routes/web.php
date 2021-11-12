<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products',ProductController::class);
Route::resources([
    'productsx'=>ProductController::class,
    'productsx2'=>ProductController::class,    
    'productsx3'=>ProductController::class,
]);