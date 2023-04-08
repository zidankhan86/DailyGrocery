<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Products;
use App\Models\Shop;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
        $totalShop = Shop::get()->count();
         //For Products
         $totalProducts = Products::get()->count();
         //customer
         $totalCustomer = Customer::get()->count();
         return view('backend.pages.dashboard',compact('totalShop','totalProducts','totalCustomer'));



    }
    public function dashboard(){

        //For Products
        $totalShop = Shop::get()->count();
         //For Products
         $totalProducts = Products::get()->count();
         //customer
         $totalCustomer = Customer::get()->count();
         return view('backend.pages.dashboard',compact('totalShop','totalProducts','totalCustomer'));

    }
}
