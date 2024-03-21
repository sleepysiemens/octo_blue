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
        /*switch ($data['feedback_type'])
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
        }*/



        $chat=TelegraphChat::query()->where('chat_id','=','-4142885109')->first();
        #$chat->message("Новая заявка на сайте.\nСпособ связи: ".$data['feedback_type']."\nКонтактные данные: ".$data['feedback_info']."\nКомментарий: ".$data['comment'])->send();
        $chat->message("Новая заявка на сайте.\nКонтактные данные:"."\n\t- Email: ".$data['email']."\n\t- Телефон: ".$data['phone']."\nКомментарий: ".$data['comment'])->send();

        return redirect()->route('submit.form.get');
    }

    public function submit_form_get()
    {
        return view('pages.form-submit.index');

    }


    public function lab()
    {
        // Путь к вашему файлу Word
        $wordFilePath = public_path('img/IMG_3876.jpg');

        // Отправляем файл как поток в HTTP-ответе
        return response()->file($wordFilePath);
    }

    public function price()
    {
        $wordFilePath = public_path('files/1_ИМ_Артиколи_форма_для_заполнения.xlsx');

        // Отправляем файл как поток в HTTP-ответе
        return response()->download($wordFilePath, '1_ИМ_Артиколи_форма_для_заполнения.xlsx');
    }
}
