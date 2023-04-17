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

        if ($request->hasFile('image')) {

            //Encryption
            $imageName=date('Ymdhsis').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $imageName);

        }
        dd($request->all());

        Blog::create([
            'description' =>$request->description,
            'image'=>$imageName,

        ]);
        toast()->success('Success');
        return redirect()->back();


    }
}
