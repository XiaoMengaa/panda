<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function login(){
        $redirect_url = env('WEIBO_REDIRECT_URI');
        return Socialite::driver('weibo')->scopes(['user_friends'])->redirectUrl($redirect_url)->redirect();
    }
 
    public function callback(){
        $redirect_url = env('WEIBO_REDIRECT_URI');
        $userData = Socialite::driver('weibo')->stateless()->user();
        dd($userData);
    }
}
