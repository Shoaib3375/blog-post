<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs= Blog::paginate(5);
        return view('blog/index', compact('blogs'));
    }
    public function showBlogs()
    {
        $blogs = Blog::all();
        return view('blog.all_blog',compact('blogs'));
    }
    public function singleBlog($id, Request $request)
    {
        $comment = Blog::where('id',$id)->with('comments')->get();
        $comment = $comment[0];
        return view('blog.single_blog', compact('comment'));

    }
}
