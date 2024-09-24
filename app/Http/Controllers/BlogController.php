<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Category;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index(){
       
       dd(request(['search']));
        return view('blogs',[
            'blogs' =>Blog::latest()->filter(request(['search']))->get(),
            'categories' =>Category::all() ,
            
        ]);
    }


    function show(Blog $blog) {
    
        return view('blog',[
            'blog' => $blog,
            'randomBlogs' => Blog::inRandomOrder()->take(3)->get()
            
        ]);
    }
    
}
