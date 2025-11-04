<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    //トップページ表示
    public function index()
    {
        // 商品、関連する brand の情報を同時に取得
        $items = Item::with(['brands'])->get();
        return view('index', compact('items'));
    }

}
