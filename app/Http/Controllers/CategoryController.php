<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug_category)
    {
        $category = Category::where('slug', $slug_category)->firstOrFail();

        $categories = Category::with('children')->get();


        return view('front.category',compact('categories','category'));


    }
}
