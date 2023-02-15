<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function shipping_list(){
        return view('backend.pages.shipping.shippinList');
    }
}
