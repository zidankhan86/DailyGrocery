<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function frontend_index(){

        return view('frontend.pages.home');
    }

    //for change language
    public function changeLanguage($lang){

        session()->put('loc',$lang);
        return redirect()->back();


    }
}
