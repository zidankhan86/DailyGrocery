<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefoundController extends Controller
{
    public function refound_list(){

        return view('backend.pages.refound.refound');
    }
}
