<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_form(){

        return view('backend.pages.loginRegistration.login');

    }
    public function login_process(Request $request){

       // dd($request->all());
    $PorichoyPotro = $request->except('_token');

    if(Auth::attempt($PorichoyPotro))
    {

        if(auth()->user()->role=='admin'){

        return redirect()->route('dashboard')->with('message','login done');
    }else{

        Auth::logout();
        return redirect()->back();
        }
    }
    return redirect()->back();
}


    public function registration(){

        return view('backend.pages.loginRegistration.registration');
    }
    public function registration_create(Request $request){


        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'password'=>'required']);


            User::create([


                'name'=>$request->name,
                'email'=>$request->email,
                'address'=>$request->address,
                'phone'=>$request->phone,
                'password'=>bcrypt($request->password),
                'role'=>"admin"

            ]);
            return redirect()->back();
    }
    public function logout(){
        Auth::logout();

        return redirect()->back();
    }
}
