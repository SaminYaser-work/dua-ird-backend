<?php

use App\Http\Controllers\API\V1\CategoryController;
use App\Http\Controllers\API\V1\DuaController;
use App\Http\Controllers\API\V1\SubCategoryController;
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

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\API\V1'], function () {
    Route::get('categories', [CategoryController::class, 'index']);
    Route::get('subcategories/{cat_id}', [SubCategoryController::class, 'index']);
    Route::get('duas/{cat_id}', [DuaController::class, 'index']);
});
