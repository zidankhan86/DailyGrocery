<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
        return view('backend.pages.dashboard');
    }
    public function dashboard(){

        return view('backend.pages.dashboard');
    }
}
