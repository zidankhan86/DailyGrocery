<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Billing;
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
//billing information

    public function billingStore(Request $request){
        // dd($request->all());

        Billing::create([
            'user_id'=>auth()->user()->id,
            'product_id'=>$request->product_id,
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'date'=>$request->date,
            'address'=>$request->address,
            'road'=>$request->road,
        ]);

        toastr()->success('Thank You For Your Order');
        return redirect()->route('home');

    }
}
