<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login_form(){

        return view( 'backend.pages.loginRegistration.login');

    }
    public function registration(){

        return view('backend.pages.loginRegistration.login');
    }
}
