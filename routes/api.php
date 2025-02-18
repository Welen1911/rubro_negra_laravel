<?php

use App\Http\Controllers\Api\ProdutoArrayController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('produtos')->group(function () {
    Route::prefix('array')->group(function () {
        Route::get('/', [ProdutoArrayController::class, 'index']);
        Route::get('/{codigo}', [ProdutoArrayController::class, 'show']);
    });

    Route::prefix('arvore')->group(function () {
        Route::get('/', [ProdutoArrayController::class, 'index']);
        Route::get('/{codigo}', [ProdutoArrayController::class, 'show']);
    });
});
