<?php

namespace App\Http\Controllers;

use DefStudio\Telegraph\Models\TelegraphChat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MainController extends Controller
{
    public function index()
    {
        if(Cache::has('title') and Cache::has('description'))
        {
            $title=Cache::get('title');
            $description=Cache::get('description');
        }
        else
        {
            $title='Синяя Смазка Оптом';
            $description='Описание';

            Cache::put('title',$title);
            Cache::put('description',$description);
        }

        return view('pages.main.index', compact('title', 'description'));
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
