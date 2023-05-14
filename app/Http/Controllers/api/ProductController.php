<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Billing;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
       $product = Products::all();
       return response()->json($product);
    }

    public function category(){
        $category = Category::all();
        return response()->json($category);
    }

    public function blog(){
        $blog = Blog::all();
        return response()->json( $blog);
    }

public function order(){
    $billing = Billing::all();
    return response()->json( $billing );
}


}
