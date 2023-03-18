<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function frontend_index(){

        $products = Products::all();

        return view('frontend.pages.home',compact('products'));
    }

    //for change language
    public function changeLanguage($lang){

        session()->put('loc',$lang);
        return redirect()->back();


    }
}
