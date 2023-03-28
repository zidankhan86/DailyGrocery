<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContractController;
use App\Http\Controllers\frontend\IndexController as FrontendIndexController;
use App\Http\Controllers\frontend\ProductController as FrontendProductController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RefoundController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SallerController;
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

Route::get('/livewire', function () {
    return view('livewire.hello-world');
});


//FRONTEND ....

Route::group(['middleware'=>'localization'] ,function(){


Route::get('/',[FrontendIndexController::class,'frontend_index'])->name('home');
Route::get('/switch-lang/{lang}',[FrontendIndexController::class,'changeLanguage'])->name('switch.lang');

Route::get('/product/information',[FrontendProductController::class,'product_information'])->name('product.information');
Route::get('/product/description/{id}',[FrontendProductController::class,'product_description'])->name('product.description');
Route::get('/place/order',[ProductController::class,'placeOrder'])->name('place.order');
Route::post('/billing/information/store',[FrontendProductController::class,'billingStore'])->name('billing.info.store');

Route::get('/about/information',[AboutController::class,'about_information'])->name('about.information');
Route::get('/contract/information',[ContractController::class,'contract_information'])->name('contract.information');
Route::post('/send/message',[ContractController::class,'send_message'])->name('send.message');
Route::get('/customer/profile',[ProfileController::class,'customerProfile'])->name('customer.profile');

Route::get('/search/product',[ProductController::class,'search'])->name('search');

});


Route::get('/seller/registration',[AuthController::class,'sellerRegistration'])->name('become.a.seller');
Route::post('/become/seller/store',[SallerController::class,'sellerRegistrationStore'])->name('seller.registration.store');

//AUTH ....

Route::get('/login/form',[AuthController::class,'login_form'])->name('login');
Route::post('/login/process',[AuthController::class,'login_process'])->name('login.process');
Route::get('/get/registration',[AuthController::class,'registration'])->name('get.registration');
Route::post('registration/create',[AuthController::class,'registration_create'])->name('create.registration');
Route::get('logout',[AuthController::class,'logout'])->name('logout');

//BACKEND ....

Route::group(['middleware'=>'auth','prefix'=>'admin'],function(){


Route::get('/',[IndexController::class,'home'])->name('index.template');
Route::get('/dashboard',[IndexController::class,'dashboard'])->name('dashboard');

Route::get('/shop/form',[ShopController::class,'shop_form'])->name('shop.form');
Route::get('/shop/list',[ShopController::class,'shop_list'])->name('shop.list');
Route::post('/shop/store/data',[ShopController::class,'shop_store'])->name('shop.store.data');
Route::get('/shop/delete/{shop_id}',[ShopController::class,'shop_delete'])->name('shop.delete');
Route::get('/shop/edit/{shop_id}',[ShopController::class,'shop_Edit'])->name('shop.edit');
Route::put('/shop/update/{shop_id}',[ShopController::class,'shop_update'])->name('shop.update');

Route::get('/category/form',[CategoryController::class,'category_form'])->name('category.form');
Route::post('/category/store/data',[CategoryController::class,'category_create'])->name('category.store.data');
Route::get('/category/list',[CategoryController::class,'category_list'])->name('category.list');
Route::get('/category/edit/{category_id}',[CategoryController::class,'category_edit'])->name('category.edit');
Route::get('/category/delete/{category_id}',[CategoryController::class,'category_delete'])->name('category.delete');
Route::put('/category/update/{id}',[CategoryController::class,'category_update'])->name('category.update');

Route::get('/product/add',[ProductController::class,'products_form'])->name('product.form');
Route::get('product/list',[ProductController::class,'product_list'])->name('product.list');
Route::post('/product/store/data',[ProductController::class,'product_create'])->name('product.store.data');
Route::get('/products/edit/{product_id}',[ProductController::class,'products_edit'])->name('products.edit');
Route::get('/product/delete/{id}',[ProductController::class,'productDelete'])->name('product.delete');
Route::put('/product/update/{id}',[ProductController::class,'productUpdate'])->name('product.update');

Route::get('/add/customer',[CustomerController::class,'customer_form'])->name('customer.form');
Route::get('/customer/list',[CustomerController::class,'customer_list'])->name('customer.list');
Route::post('/customer/store/data',[CustomerController::class,'customer_create'])->name('customer.store.data');
Route::get('/customer/edit/{customer_id}',[CustomerController::class,'customer_edit'])->name('customer.edit');
Route::get('/customer/delete/{customer_id}',[CustomerController::class,'delete'])->name('customer.delete');
Route::put('/customer/update/{customer_id}',[CustomerController::class,'customer_update'])->name('customer.update');

Route::get('/order/list',[ProductController::class,'order_list'])->name('order.list');
Route::get('/shipping/list',[ShippingController::class,'shipping_list'])->name('shipping.list');
Route::get('/refound/list',[RefoundController::class,'refound_list'])->name('refound.list');
Route::get('/reviews/list',[ProductController::class,'reviews_list'])->name('reviews.list');
Route::get('/notice/list',[NoticeController::class,'notice_list'])->name('notice.list');

Route::get('/profile',[ProfileController::class,'profile'])->name('profile');


//How to see List of Route for only 7 method // php artisan route:list --name=role
//how to make 7 method //
Route::resource('/role',RoleController::class);
Route::resource('/brand',BrandController::class);
});





