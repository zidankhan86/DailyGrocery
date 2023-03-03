<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function products_form(){

        $categories=Category::all();

        return view('backend.pages.product.productForm',compact('categories'));
    }
    public function order_list(){

        return view('backend.pages.order.orderList');
    }
    public function reviews_list(){
        return view('backend.pages.reviews.reviewsList');
    }
    public function product_list(){
        $productlist=Products::with('CategoryRelation')->paginate(5);

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
'category_id'=>$request->category_id,
'image'=>$request->image,
'price'=>$request->price,
'quantity'=>$request->quantity,
'details'=>$request->details,
'status'=>$request->status


  ]);
  toastr()->success('Product Added Successfully!!');
  return redirect()->back();

    }
    public function products_edit($product_id){
        $productsData = Products::find($product_id);
        return view('backend.pages.product.productsEdit',compact('productsData'));

    }
}
