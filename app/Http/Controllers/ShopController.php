<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop_form(){

        return view('backend.pages.shop.shopForm');
    }

    public function shop_store(Request $request){

        $request->validate([

   'shop_logo'=>'sometimes',
   'shop_name' =>'required',
   'owner_name'=>'required',
   'gender'=>'required',
   'phone'=>'required',
   'email'=>'required',
   'description'=>'required',
   'status'=>'required'


    ]);
    //image er kaj
    Shop::create([
        "shop_logo"=>$request->shop_logo,
        "shop_name" =>$request->shop_name,
        "owner_name" =>$request->owner_name,
        "gender"=>$request->gender,
        "phone"=>$request->phone,
        "email"=>$request->email,
        "description"=>$request->description,
        "status"=>$request->status

    ]);
    return redirect()->back();
}

    public function shop_list(){
        $shoplist= Shop::paginate(2);

        return view('backend.pages.shop.shopList',compact('shoplist'));
    }
    public function shop_delete($shop_id){
    $delete=Shop::find($shop_id);
    $delete->delete();
    return redirect()->route('shop.list');

    }

}
