<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Cache;

class MainController extends Controller
{
    public $title;
    public $description;

    public function __construct()
    {
        if(Cache::has('title') and Cache::has('description'))
        {
            $this->title=Cache::get('title');
            $this->description=Cache::get('description');
        }
        else
        {
            $this->title='Синяя Смазка Оптом';
            $this->description='Описание';

            Cache::put('title',$this->title);
            Cache::put('description',$this->description);
        }
    }

    public function index()
    {
        $title=$this->title;
        $description=$this->description;
        return view('pages.admin.main.index', compact(['title', 'description']));
    }

    public function update()
    {
        $this->title=request()->title;
        $this->description=request()->description;

        Cache::put('title',$this->title);
        Cache::put('description',$this->description);

        return redirect()->route('admin.index');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('main.index');
    }
}
