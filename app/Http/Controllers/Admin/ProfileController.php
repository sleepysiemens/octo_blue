<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function index()
    {
        $error=false;
        $succ=false;

        if(isset(request()->error))
            $error=true;

        if(isset(request()->succ))
            $succ=true;

        return view('pages.admin.profile.index', compact(['error', 'succ']));
    }

    public function update()
    {
        if(request()->password==request()->password2)
        {
            $data=['email'=>request()->email, 'password'=>Hash::make(request()->password)];

            $user=User::query()->where('id','=',auth()->user()->id)->first();

            $user->update($data);
            $succ=true;

            return redirect()->route('admin.profile.index', ['succ'=>$succ]);
        }
        else
        {
            $error=true;
            return redirect()->route('admin.profile.index', ['error'=>$error]);
        }
    }
}
