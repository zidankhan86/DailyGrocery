<?php

use App\Http\Controllers\api\BrandController;
use App\Http\Controllers\api\CustomerController;
use App\Http\Controllers\api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/product/get',[ProductController::class,'product']);
Route::get('/category',[ProductController::class,'category']);
Route::get('/blog',[ProductController::class,'blog']);
Route::get('/get/order',[ProductController::class,'order']);

Route::get('/get/customer',[CustomerController::class,'customer']);

Route::get('/get/brand',[BrandController::class,'brand']);



