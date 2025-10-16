<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AuthController extends Controller
{
    //ログイン画面の表示
    public function login()
    {
        return view('auth.login');
    }
}
