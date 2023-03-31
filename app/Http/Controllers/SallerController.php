<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;

class SallerController extends Controller
{
    public function sellerRegistrationStore(Request $request){

        Seller::create([

            'name'          =>$request->name,
            'email'         =>$request->email,
            'password'      =>bcrypt($request->password),

        ]);
        toastr()->success('Account create success');
        return back();

    }
    public function seller_login_process(){

        

    }
}
