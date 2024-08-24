<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Blog;

class BlogsController extends Controller
{
    //
    public function getBlogs(){
        return view('blogs', [
            'blogs' => Blog::all()
        ]);
    }
    public function showBlogs($id){
        $blogs= Blog::find($id);
        return view('blog-id', ['blogs' => $blogs]);
    }
}
