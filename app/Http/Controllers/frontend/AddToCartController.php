<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class AddToCartController extends Controller
{
    public function addToCart($id)
    {

        $product=Products::find($id);
        if($product)
        {
            $cart=session()->get('cart');
//            dd($cart);
            if(!$cart)


            {
                //step 1: cart empty
                //add to cart- first product


                    $myCart[$id]=[
                    'product_name'=>$product->product_name,
                      'price'=>$product->price,
                      'quantity'=>1,
                      'subtotal'=>$product->price,   //price x quantity
                    ];

                  session()->put('cart',$myCart);
                  toastr()->success('Product added to cart.');
                  return redirect()->back();
            }


            //step 2:Cart not empty but product not exist
            //add to cart


            if(!array_key_exists($id,$cart)){
                $cart[$id]=[
                    'product_name'=>$product->product_name,
                    'price'=>$product->price,
                    'quantity'=>1,
                    'subtotal'=>$product->price,//price x quantity
                ];

                session()->put('cart',$cart);
                toastr()->success('New product added.');
                return redirect()->back();

            }

            //step 3 : cart not empty but product exist
            // quantity , subtotal update
            $cart[$id]['quantity']=$cart[$id]['quantity']+1;
            $cart[$id]['subtotal']=$cart[$id]['quantity'] * $cart[$id]['price'];
            session()->put('cart',$cart);

            toastr()->success('Cart updated.');
            return redirect()->back();
            }
            toastr()->error('No Product Found.');
            return redirect()->back();



    }


                //View Cart
                public function viewCart(){
                    $products = Products::all();
                    return view('frontend.pages.addtocart.ViewProduct',compact('products'));
                }


                //Clear Cart
                public function CartClear()
                {
                        session()->forget('cart');
                        toastr()->success('Cart Clear success.');
                        return redirect()->back();
                }



                public function deleteCart($id)
                {
        //Delete Cart

                $cart=session()->get('cart');
               // dd($cart);
                unset($cart[$id]);
               //dd($cart);
                session()->put('cart',$cart);
                toastr()->success('Item removed.');
            return redirect()->back();
            }
}
