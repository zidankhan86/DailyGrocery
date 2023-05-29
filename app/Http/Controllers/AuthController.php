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

        $request->validate([

            'email'=>'required',
            'password'=>'required'

        ]);

       // dd($request->all());
    $PorichoyPotro = $request->except('_token');

    if(Auth::attempt($PorichoyPotro))
    {

        if(auth()->user()->role=='admin' or 'customer'){

            if(auth()->user()->role == 'admin'){
                toastr()->success('Login Success');

                return redirect()->route('dashboard');
            }else{
                toastr()->success('Login Success');
                return redirect()->route('home');
            }

    }else{

        Auth::logout();
        toastr()->error('Something is Wrong!');
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
            'email'=>'required|unique:users',
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
            return redirect()->route('login');

    }
    public function logout(){
        Auth::logout();

        toastr()->success('Logout Success');
        return redirect()->route('home');
    }

    public function sellerRegistration(){
        return view('frontend.pages.becomeSeller.sellerRegistration');
    }


}
