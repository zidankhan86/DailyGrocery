<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){

        return view('backend.pages.profile.profile');
    }

    public function customerProfile(){
        
        return view('backend.pages.profile.customerProfile');
    }

}
