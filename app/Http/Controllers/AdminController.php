<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $blog_posts=BlogPost::all();
        return view('pages.admin.index',compact(['blog_posts']));
    }

    public function create()
    {
        return view('pages.admin.create');
    }

    public function store()
    {
        $data=
            [
              'url'=>request()->url,
              'title'=>request()->title,
              'keywords'=>request()->keywords,
              'description'=>request()->description,
            ];
        BlogPost::create($data);

        return redirect()->route('admin.index');
    }

    public function delete(BlogPost $blog_post)
    {
        $blog_post->delete();
        return redirect()->route('admin.index');
    }

    public function edit(BlogPost $blog_post)
    {
        return view('pages.admin.edit', compact(['blog_post']));
    }

    public function update(BlogPost $blog_post)
    {
        $data=
            [
                'url'=>request()->url,
                'title'=>request()->title,
                'keywords'=>request()->keywords,
                'description'=>request()->description,
                'text'=>request()->text,
            ];
        $blog_post->update($data);

        return redirect()->route('admin.index');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('main.index');
    }
}
