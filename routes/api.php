<?php

use App\Http\Api\Controllers\CategoryController;
use App\Http\Api\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// product routes
Route::prefix('products')->group(function () {
    Route::post('/', [ProductController::class, 'store']);
    Route::get('/', [ProductController::class, 'index']);
    Route::delete('/{id}', [ProductController::class, 'destroy']);
});

Route::prefix('categories')->group(function (){
    Route::post('/', [CategoryController::class, 'store']);
    Route::get('/', [CategoryController::class, 'index']);
    Route::delete('/{id}', [CategoryController::class, 'destroy']);
    Route::put('/{id}', [CategoryController::class, 'update']);
});
