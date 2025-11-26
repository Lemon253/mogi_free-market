<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

use Illuminate\Support\Facades\Storage;
//use App\Http\Requests\ItemRequest;


class ItemController extends Controller
{
    //トップページ表示
    public function index()
    {
        // 商品、関連する brand の情報を同時に取得
        $items = Item::with(['brands'])->get();
        return view('index', compact('items'));
    }

    //出品画面表示
    public function sell()
    {
        // 全てのカテゴリーデータを取得
        $categories = Category::all();
        return view('sell', compact('categories'));
    }

    //商品登録処理
    public function store(Request $request)
    {
        //フォームデータ受け取り
        $parameters = $request->only([
            'name',
            'price',
            'description',
        ]);

        if ($request->hasFile('image')) {
            // アップロードされた元のファイル名を取得
            $originalName = $request->file('image')->getClientOriginalName();
            $filename = $originalName;
            $counter = 1;

            // 指定したディレクトリに同じファイル名が存在するかチェック
            while (Storage::disk('public')->exists('img/' . $filename)) {
                // ファイル名と拡張子を分割
                $extension = pathinfo($originalName, PATHINFO_EXTENSION);
                $baseName = pathinfo($originalName, PATHINFO_FILENAME);

                // "コピー(数字)" を追加してファイル名を再生成
                $filename = "{$baseName}_({$counter}).{$extension}";
                $counter++;
            }
            // `storeAs`メソッドでファイル名を指定して保存
            $path = $request->file('image')->storeAs('img', $filename, 'public');

            //最終的なファイル名
            $filename = basename($path);

            //配列[image]を追加
            $parameters['image'] = $filename;
        }

        //テーブル登録処理
        // `$item`変数に作成したモデルインスタンスを格納
        //$item = Product::create($parameters);

        //中間テーブルの更新
        //$item->seasons()->sync($request->input('seasons', []));

        return redirect()->route('products.index')->with('success', '商品が登録されました。');
    }
}
