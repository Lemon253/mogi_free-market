<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    //トップページ表示
    public function index()
    {
        return view('index');
    }
}
