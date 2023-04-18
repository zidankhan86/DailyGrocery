<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogForm(){
        return view('frontend.pages.blog.blogForm');
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
            'date' =>$request->date,
            'image'=>$imageName,

        ]);
        toastr()->success('Success');
        return redirect()->back();


    }

    public function  blogTable(){

        $blogs = Blog::all();
        return view('frontend.pages.blog.blogTable',compact('blogs'));
    }

    public function blogDelete($id){

        $deleteBlog = Blog::find($id);
        $deleteBlog->delete();

toastr()->warning('Delete');
return redirect()->back();
    }

    public function blogEdit($id){

        $blogData = Blog::find($id);

        return view('frontend.pages.blog.blogEdit',compact('blogData'));

    }
    public function blogUpdate(Request $request, $id){

//Image
$imageName = null;

if($request->hasFile('image')){

   $imageName = date('Ymdhis').'.'.$request->file('image')->getClientOriginalExtension();
   $request->file('image')->storeAs('/uploads',$imageName);
}


        $blogData = Blog::find($id);
        $blogData->update([

            'description' =>$request->description,
            'date' =>$request->date,
            'image'=>$imageName,

        ]);
        toastr()->success('Updated ','Success!');
        return redirect()->back();


    }

}
