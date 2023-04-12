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
        //dd($request->all());
        $request->validate([

        'first_name'=>'required|max:120',
        'last_name'=>'required|max:120',
        'phone'=>'required|min:11|numeric',
        'email'=>'required|email|unique:users',
        'address'=>'required'


        ]);
        $imageName=null;
        if ($request->hasFile('image')) {
            $imageName=date('Ymdhsis').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $imageName);
        }
        //dd($imageName);


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
    public function customer_edit($customer_id){
        $customerData = Customer::find($customer_id);

 return view('backend.pages.customer.customerEdit',compact('customerData'));

    }
    public function customer_update(Request $request ,$customer_id){

        $customerUpdate = Customer::find($customer_id);

        $customerUpdate->update([
        'first_name'=>$request->first_name,
        'last_name'=>$request->last_name,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'address'=>$request->address


        ]);
        toastr()->success('Success! customer updated successfully');
        return redirect()->back();



    }
}
