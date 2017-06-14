<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    //

    public function index()
    {
        $posts = Post::all();

        //dd($posts);

        return view('blog.index', compact('posts'));
    }
}
