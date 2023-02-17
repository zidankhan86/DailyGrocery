<?php

namespace App\Http\Controllers;

use App\Models\Products;
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
        $productlist=Products::all();

        return view('backend.pages.product.productList',compact('productlist'));
    }
    public function product_create(Request $request){

  $request->validate([

'product_name'=>'required',
'shop_name'=>'required',
'price' =>'required',
'quantity'=>'required',
'details'=>'required',
'status'=>'required'
  ]);

  Products::create([

'product_name'=>$request->product_name,
'shop_name' =>$request->shop_name,
'image'=>$request->image,
'price'=>$request->price,
'quantity'=>$request->quantity,
'details'=>$request->details,
'status'=>$request->status


  ]);
  return redirect()->back();

    }
}
