<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogForm(){
        return view('frontend.pages.blog.blog');
    }

    public function blogStore(Request $request){



        //Image
        $imageName = null;
        if($request->hasFile('image')){

           $imageName = date('Ymdhis').'.'.$request->file('image')->getClientOriginalExtension();
           $request->file('image')->storeAs('/uploads',$imageName);


        }
        //dd($request->all());
        //dd($imageName);

        Blog::create([
            'description' =>$request->description,
            'image'=>$imageName,

        ]);
        toastr()->success('Success');
        return redirect()->back();


    }
}
