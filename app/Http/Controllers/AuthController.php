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

        if(auth()->user()->role=='admin' or 'customer'){

            if(auth()->user()->role == 'admin'){

                return redirect()->route('dashboard')->with('message','login successful');
            }else{
                return redirect()->route('home')->with('message','Login done');
            }

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

    //Customer Registration
    public function registration_create(Request $request){


        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'phone'=>'required|min:11',
            'password'=>'required|min:5'
        ]);


            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'address'=>$request->address,
                'phone'=>$request->phone,
                'password'=>bcrypt($request->password),
                'role'=>"customer"
            ]);

            toastr()->success('Account Created Successfully');
            return redirect()->back();

    }
    public function logout(){
        Auth::logout();

        return redirect()->route('home');
    }

    public function sellerRegistration(){
        return view('frontend.pages.becomeSeller.sellerRegistration');
    }


}
