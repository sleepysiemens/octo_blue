<?php

namespace App\Http\Controllers;

use DefStudio\Telegraph\Models\TelegraphChat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MainController extends Controller
{
    public function index()
    {
        if(Cache::has('title') and Cache::has('description') and Cache::has('keywords'))
        {
            $title=Cache::get('title');
            $description=Cache::get('description');
            $keywords=Cache::get('keywords');
        }
        else
        {
            $title='OKTOOIL – Синяя смазка оптом';
            $description='OKTOOIL предлагает качественную синюю смазку оптом для подшипников и промышленного оборудования. В наличии высокотемпературные, литиевые и пластичные смазки в тубах и ведрах. Лучшие цены на рынке, быстрая доставка по всей России.';
            $keywords='синяя смазка оптом
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

            Cache::put('title',$title);
            Cache::put('description',$description);
            Cache::put('keywords',$keywords);
        }

        return view('pages.main.index', compact(['title', 'description', 'keywords']));
    }

    public function submit_form()
    {
        $data=request()->all();
        unset($data['_token']);
        switch ($data['feedback_type'])
        {
            case 'email':
                $data['feedback_type']='Электронная почта';
                break;
            case 'phone':
                $data['feedback_type']='Телефон';
                break;
            case 'tg':
                $data['feedback_type']='Telegram';
                break;
            case 'wa':
                    $data['feedback_type']='WhatsApp';
                break;
        }
        $chat=TelegraphChat::find(1);
        $chat->message("Новая заявка на сайте.\nСпособ связи:".$data['feedback_type']."\nКонтактные данные:".$data['feedback_info']."\nКомментарий:".$data['comment'])->send();

        return view('pages.form-submit.index');
    }
}
