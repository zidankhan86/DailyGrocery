<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function category_form(){

        return view('backend.pages.category.categoryForm');
    }

    public function category_list(){
        $categories = Category::all();

        return view('backend.pages.category.categoryList',compact('categories'));
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
        toastr()->success('Category Added Successfully!!');
        return redirect()->back();
    }
    public function category_edit($category_id){

        $categoryData = Category::find($category_id);


        return view('backend.pages.category.categoryEdit',compact('categoryData'));

    }
     public function category_delete($category_id){

        $categoryDelete = Category::find($category_id);
        $categoryDelete->delete();

        toastr()->success('Success! Category added Successfully!!');
        return redirect()->back();

     }
}
