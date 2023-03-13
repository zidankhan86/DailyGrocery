<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function contract_information(){

        return view('frontend.pages.contract');
    }
    public function send_message(Request $request){
    Contract::create([

        'name'=>$request->name,
        'email'=>$request->email,
        'subject'=>$request->subject,
        'message'=>$request->message,

    ]);
    toastr()->success('Your Message Has been Sent');
    return redirect()->back();


    }

}
