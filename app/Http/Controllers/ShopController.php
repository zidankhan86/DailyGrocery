<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop_form(){

        return view('backend.pages.shop.shopForm');
    }

    public function shop_list(){

        return view('backend.pages.shop.shopList');
    }
}
