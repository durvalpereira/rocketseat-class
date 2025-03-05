<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;

Route::apiResource('customers', CustomerController::class);
// crie as rotas para o recurso de produtos
// e associe o controller ProductController a elas
// e importe o ProductController no inicio do arquivo
Route::apiResource('products', ProductController::class);
