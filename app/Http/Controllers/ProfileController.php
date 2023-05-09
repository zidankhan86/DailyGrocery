<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){

        return view('backend.pages.profile.profile');
    }

    public function customerProfile(){

        $order = Billing::with('UserRelation')->where('user_id',auth()->user()->id)->get();

        return view('backend.pages.profile.customerProfile',compact('order'));
    }

}
