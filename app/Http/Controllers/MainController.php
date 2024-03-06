<?php

namespace App\Http\Controllers;

use DefStudio\Telegraph\Models\TelegraphChat;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.main.index');
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
