<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = Post::all()->take(8);

        return view('front.new-blog',compact('blogs'));
    }
}
