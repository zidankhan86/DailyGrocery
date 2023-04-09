<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\Customer;
use App\Models\Products;
use App\Models\Shop;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
        //For Orders
        $totalOrder = Billing::get()->count();
        //For Shop
        $totalShop = Shop::get()->count();
         //For Products
         $totalProducts = Products::get()->count();
         //customer
         $totalCustomer = Customer::get()->count();
         return view('backend.pages.dashboard',compact('totalShop','totalProducts','totalCustomer','totalOrder'));



    }
    public function dashboard(){

           //For Orders
          $totalOrder = Billing::get()->count();
          //For Products
          $totalShop = Shop::get()->count();
          //For Products
          $totalProducts = Products::get()->count();
         //customer
          $totalCustomer = Customer::get()->count();
         return view('backend.pages.dashboard',compact('totalShop','totalProducts','totalCustomer','totalOrder'));

    }
}
