<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report(){

        $productlist = Products::all();
        return view('backend.pages.report.report',compact('productlist'));
    }
}
