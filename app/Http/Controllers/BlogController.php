<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index($url)
    {
        $blog_post=BlogPost::query()->where('url','=',$url)->first();
        //dd($blog_post);
        return view('pages.blog.index', compact(['blog_post']));
    }
}
