<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products_form(){

        return view('backend.pages.product.productForm');
    }
    public function order_list(){
        return view('backend.pages.order.orderList');
    }
    public function reviews_list(){
        return view('backend.pages.reviews.reviewsList');
    }
    public function product_list(){

        return view('backend.pages.product.productList');
    }
}
