<?php

namespace App\Http\Controllers\Blogs;

use App\Models\Blog;
use Illuminate\Routing\Controller;

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
