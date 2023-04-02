<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SallerController extends Controller
{
    public function sellerRegistrationStore(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'

        ]);

        Seller::create([

            'name'          =>$request->name,
            'email'         =>$request->email,
            'password'      =>bcrypt($request->password),

        ]);
        toastr()->success('Account create success');
        return back();

    }
    public function seller_login_process(Request $request){

        $credentials = $request->except('_tocken');

        if(auth()->guard('seller')->attempt($credentials)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('home');
        }



    }
}
