<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer_form(){

        return view('backend.pages.customer.customerForm');
    }
    public function customer_list(){

        return view('backend.pages.customer.customerList');
    }
}
