<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    //
    protected $limit = 3;

    public function index()
    {


        $posts = Post::with('author')
                            ->latestFirst()
                            ->published()
                            ->Paginate($this->limit);

        return  view('blog.index', compact('posts'));


    }
}
