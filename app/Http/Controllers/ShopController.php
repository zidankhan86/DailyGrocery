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
    //Step 1 - image k null hote pare bale dite hobe
    //step 2 -if diye logic likhte hobe "Jodi request er modde 'Image Field er kono file thake'
    //step 3 - jodi kono file thake taile file take Encript koro Ymhsi diye, Orginal Extention er mather use hobe
    //step 4 - request theke file ene ta Store korte hobe '/' folder e ,then variable name

            $imageName = null;
            if($request->hasFile('shop_logo')){

            $imageName = date('Ymdhis').'.'.$request->file('shop_logo')->getClientOriginalExtension();
            $request->file('shop_logo')->storeAs('/uploads',$imageName);

    }
    // dd($imageName);
    Shop::create([
        "shop_logo"=>$imageName,
        "shop_name" =>$request->shop_name,
        "owner_name" =>$request->owner_name,
        "gender"=>$request->gender,
        "phone"=>$request->phone,
        "email"=>$request->email,
        "description"=>$request->description,
        "status"=>$request->status

    ]);

    toastr()->success('Shop Added Successfully!!');
    return redirect()->back();
}

    public function shop_list(){
        $shoplist= Shop::paginate(2);

        return view('backend.pages.shop.shopList',compact('shoplist'));
    }

    public function shop_delete($shop_id){
    $delete=Shop::find($shop_id);
    $delete->delete();
    toastr()->error('Shop Delete Successfully!!');
    return redirect()->route('shop.list');

    }

    public function shop_Edit($shop_id){
        $shopData = Shop::find($shop_id);
        return view('backend.pages.shop.shopEdit',compact('shopData'));
    }

    public function shop_update(Request $request,$shop_id){
    $shopUpdate = Shop::find($shop_id);

    //image
    $imageName = null;
    if($request->hasFile('shop_logo')){

    $imageName = date('Ymdhis').'.'.$request->file('shop_logo')->getClientOriginalExtension();
    $request->file('shop_logo')->storeAs('/uploads',$imageName);

    }

    // dd($request->all());

    $shopUpdate->update([

        "shop_logo"=>$imageName,
        "shop_name" =>$request->shop_name,
        "owner_name" =>$request->owner_name,
        "gender"=>$request->gender,
        "phone"=>$request->phone,
        "email"=>$request->email,
        "description"=>$request->description,
        "status"=>$request->status


    ]);
    toastr()->success('Success! Shop Updated Successfully');
    return redirect()->back();



    }

}
