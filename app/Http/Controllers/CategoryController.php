<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function category_form(){

        return view('backend.pages.category.categoryForm');
    }

    public function category_create(Request $request){

        $request->validate([

            'name'=>'required',
            'details' =>'required',
            'type'=>'required',
            'parent_category'=>'required',


        ]);
        Category::create([
            'name'=>$request->name,
            'details' =>$request->details,
            'image'=>$request->image,
            'type'=>$request->type,
            'parent_category'=>$request->parent_category

        ]);
        Alert::success('Success!','Category Added Successfully!');
        return redirect()->back();
    }
}
