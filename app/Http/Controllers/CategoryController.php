<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category_form(){

        return view('backend.pages.category.categoryForm');
    }
}
