<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer_form(){

        return view('backend.pages.customer.customerForm');
    }
    public function customer_list(){

        $customerlist=Customer::paginate(5);

        return view('backend.pages.customer.customerList',compact('customerlist'));
    }
    public function customer_create(Request $request){
        $request->validate([
        'first_name'=>'required',
        'last_name'=>'required',
        'phone'=>'required',
        'email'=>'required',
        'address'=>'required'


        ]);
    Customer::create([
        'first_name'=>$request->first_name,
        'last_name'=>$request->last_name,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'image'=>$request->image,
        'address'=>$request->address

    ]);
    return redirect()->back();

    }
    public function delete ($customer_id){
    $delete=Customer::find($customer_id);
    $delete->delete();

    return redirect()->route('customer.list');

    }
}
