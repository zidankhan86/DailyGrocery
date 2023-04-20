<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;


class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands=Brand::all();
        return view('backend.pages.brand.brandList',compact('brands'));

        $brandList = Brand::with('CategoryRelation');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.brand.brandForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $request->validate([
        'name'=>'required',
     ]);

         $imageName = null;
         if($request->hasFile('logo')){

            $imageName = date('Ymdhis').'.'.$request->file('logo')->getClientOriginalExtension();
            $request->file('logo')->storeAs('/uploads',$imageName);


         }
         //dd($imageName);

        Brand::create([
            'name'=>$request->name,
            'logo'=>$imageName,
        ]);
        return redirect()->back()
        ->with('success', 'Brand Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($brand)
    {
        $brandData = Brand::find($brand);

        return view('backend.pages.brand.brandEdit',compact('brandData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     $updateData = Brand::find($id);
     $updateData->update([

        'name'=>$request->name,
        'logo'=>$request->logo,

     ]);

     toastr()->success('Success!! Brand Updated Successfully');
     return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Brand::find($id);
        $delete->destroy();
    }
}
