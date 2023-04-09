<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function products_form(){

        $categories=Category::all();

        return view('backend.pages.product.productForm',compact('categories'));
    }
    public function order_list(){
        $orders = Billing::all();

        return view('backend.pages.order.orderList',compact('orders'));
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

  $imageName = null;
         if($request->hasFile('image')){

            $imageName = date('Ymdhis').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$imageName);

  }

  //dd($imageName);

  Products::create([

'product_name'=>$request->product_name,
'shop_name' =>$request->shop_name,
'category_id'=>$request->category_id,
'image'=>$imageName,
'price'=>$request->price,
'quantity'=>$request->quantity,
'details'=>$request->details,
'status'=>$request->status,
'subtotal'=>$request->subtotal


  ]);
  toastr()->success('Product Added Successfully!!');
  return redirect()->back();

    }
    public function products_edit($product_id){
        $productsData = Products::find($product_id);
        $categories = Category::all();
        return view('backend.pages.product.productsEdit',compact('productsData','categories'));

    }
    public function productDelete($id){

        $delete = Products::find($id);
        $delete->delete();

        toastr()->error('Success! Product Deleted Successfully!!');

        return redirect()->back();



    }
    public function productUpdate(Request $request,$id){


        $productsData = Products::find($id);

        $productsData->update([

        'product_name'=>$request->product_name,
        'shop_name' =>$request->shop_name,
        'category_id'=>$request->category_id,
        'image'=>$request->image,
        'price'=>$request->price,
        'quantity'=>$request->quantity,
        'details'=>$request->details,
        'status'=>$request->status

        ]);

        toastr()->success('Success! Product Updated Successfully');
        return redirect()->back();
    }
//Place Order

public function placeOrder($id){
    $product = Products::find($id);
    return view('frontend.pages.productDetails.placeOrder',compact('product'));
}

//search

public function search(Request $request){

    $searchResult=Products::where('product_name','LIKE','%'.$request->search_key.'%')->get();

    return view('frontend.pages.search.search', compact('searchResult'));
}

}
