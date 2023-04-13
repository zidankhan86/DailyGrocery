<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{
    public function report(){

        $productlist = Products::all();
        return view('backend.pages.report.report',compact('productlist'));
    }

    public function generate(Request $request){

        $validator = Validator::make($request->all(), [
            'from_date'    => 'required|date',
            'to_date'      => 'required|date|after:from_date',
        ]);

        if($validator->fails())
        {

            toastr()->error('From date and to date required and to should greater then from date.');
            return redirect()->back();
        }

    }
}
