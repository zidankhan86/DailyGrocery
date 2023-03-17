<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_information(){

        $products = Products::all();
        return view('frontend.pages.product',compact('products'));
    }


    public function product_description($id){

        $product = Products::find($id);

        return view('frontend.pages.productDetails.Productdetails',compact('product'));
    }
}
