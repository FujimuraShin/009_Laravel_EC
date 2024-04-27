<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use \App\Http\Controllers\ShopController;

Route::get('/index',[ShopController::class,'index']);

Route::get('/detail/{id?}',[ShopController::class,'productsDetail']);


use \App\Http\Controllers\ProductDetailController;

Route::get('/detail',[ProductDetailController::class,'index']);