<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[IndexController::class,'home'])->name('index.template');
Route::get('/dashboard',[IndexController::class,'dashboard'])->name('dashboard');
Route::get('/shop/form',[ShopController::class,'shop_form'])->name('shop.form');
Route::get('/category/form',[CategoryController::class,'category_form'])->name('category.form');
Route::get('/product/add',[ProductController::class,'products_form'])->name('product.form');
Route::get('/add/customer',[CustomerController::class,'customer_form'])->name('customer.add');
