<?php

use App\Http\Controllers\Api\CategoriaProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\ProdutoController; 

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('categoria', CategoriaController::class);

Route::apiResource('produto', ProdutoController::class);


Route::apiResource('categoria_produtos', CategoriaProdutoController::class);
