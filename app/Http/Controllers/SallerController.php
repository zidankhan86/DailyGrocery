<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SallerController extends Controller
{
    public function sellerRegistrationStore(Request $request){

        User::create([

            'name'=>$request->name,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
                'role'=>"seller"

        ]);
        toastr()->success('Account create success');
        return back();

    }
}
