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
        $imageName=null;
        if ($request->hasFile('image')) {
            $imageName=date('Ymdhsis').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $imageName);
 }


    Customer::create([

        'first_name'=>$request->first_name,
        'last_name'=>$request->last_name,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'image'=>$imageName,
        'address'=>$request->address

    ]);
    toastr()->success('Customer Added Successfully!!');
    return redirect()->back();

    }
    public function delete ($customer_id){
    $delete=Customer::find($customer_id);
    $delete->delete();

    toastr()->success('Customer Added Successfully!!');
    return redirect()->route('customer.list');

    }
}
