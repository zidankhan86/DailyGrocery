<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SallerController extends Controller
{
    public function sellerRegistrationStore(Request $request){

        //dd($request->all());

        $request->validate([
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users',


        ]);


        Seller::create([

            'name'          =>$request->name,
            'email'         =>$request->email,
            'phone'         =>$request->phone,
            'shop_name'     =>$request->shop_name,
            'address'       =>$request->address,
            'status'        =>'pending'

        ]);
        toastr()->success('Account Request success');
        return to_route('home');

    }
    public function seller_login_process(Request $request){

        $credentials = $request->except('_tocken');

        if(auth()->guard('seller')->attempt($credentials)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('home');
        }



    }

    public function sellerList(){
        $sellers = Seller::all();
        return view('backend.pages.seller.sellerList',compact('sellers'));
    }
}
