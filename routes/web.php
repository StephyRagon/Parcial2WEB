<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos',[ProductsController::class,'index'])
->name('Productos.index');

Route::get('/productos/create',[ProductsController::class,'create']);

