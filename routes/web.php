<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RefoundController;
use App\Http\Controllers\ShippingController;
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
Route::get('/shop/list',[ShopController::class,'shop_list'])->name('shop.list');
Route::post('/shop/store/data',[ShopController::class,'shop_store'])->name('shop.store.data');

Route::get('/category/form',[CategoryController::class,'category_form'])->name('category.form');
Route::post('/category/store/data',[CategoryController::class,'category_create'])->name('category.store.data');

Route::get('/product/add',[ProductController::class,'products_form'])->name('product.form');
Route::get('product/list',[ProductController::class,'product_list'])->name('product.list');
Route::post('/product/store/data',[ProductController::class,'product_create'])->name('product.store.data');

Route::get('/add/customer',[CustomerController::class,'customer_form'])->name('customer.form');
Route::get('/order/list',[ProductController::class,'order_list'])->name('order.list');
Route::get('/shipping/list',[ShippingController::class,'shipping_list'])->name('shipping.list');
Route::get('/refound/list',[RefoundController::class,'refound_list'])->name('refound.list');
Route::get('/reviews/list',[ProductController::class,'reviews_list'])->name('reviews.list');
Route::get('/notice/list',[NoticeController::class,'notice_list'])->name('notice.list');
Route::get('/customer/list',[CustomerController::class,'customer_list'])->name('customer.list');

