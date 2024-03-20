<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Cache;

class MainController extends Controller
{
    public $title;
    public $description;
    public $keywords;

    public function __construct()
    {
        if(Cache::has('title') and Cache::has('description') and Cache::has('keywords'))
        {
            $this->title=Cache::get('title');
            $this->description=Cache::get('description');
            $this->keywords=Cache::get('keywords');
        }
        else
        {
            $this->title='OKTOOIL – Синяя смазка оптом';
            $this->description='OKTOOIL предлагает качественную синюю смазку оптом для подшипников и промышленного оборудования. В наличии высокотемпературные, литиевые и пластичные смазки в тубах и ведрах. Лучшие цены на рынке, быстрая доставка по всей России.';
            $this->keywords='синяя смазка оптом
синяя смазка для подшипников
смазка синяя в тубах
купить синюю смазку
высокотемпературная синяя смазка
смазка 158 синяя
синяя смазка цены
синяя литиевая смазка
смазка в тубах синяя цена
смазка синяя EP 2
синяя пластичная смазка
синяя смазка Blue
смазка синего цвета
синяя смазка артикул
смазка синяя ведро';

            Cache::put('title',$this->title);
            Cache::put('description',$this->description);
            Cache::put('keywords',$this->keywords);
        }
    }

    public function index()
    {
        $title=$this->title;
        $description=$this->description;
        $keywords=$this->keywords;
        return view('pages.admin.main.index', compact(['title', 'description', 'keywords']));
    }

    public function update()
    {
        $this->title=request()->title;
        $this->description=request()->description;
        $this->keywords=request()->keywords;

        Cache::put('title',$this->title);
        Cache::put('description',$this->description);
        Cache::put('keywords',$this->keywords);

        return redirect()->route('admin.index');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('main.index');
    }
}
