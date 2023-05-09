<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{
    public function report()
    {
        $products=Billing::all();
        return view('backend.pages.report.report',compact('products'));
    }

//     public function reportSearch(Request $request)
//     {

//         $validator = Validator::make($request->all(), [
//             'from_date'    => 'required|date',
//             'to_date'      => 'required|date|after:from_date',
//         ]);

//         if($validator->fails())
//         {
//             notify()->error($validator->getMessageBag());
//             toastr()->error('From date and to date required and to should greater then from date.');
//             return redirect()->back();
//         }



//        $from=$request->from_date;
//        $to=$request->to_date;


//       $status=$request->status;

        // $orders=Billing::whereBetween('created_at', [$from, $to])->get();
        // return view('backend.pages.report.report',compact('orders'));

    // }
}
