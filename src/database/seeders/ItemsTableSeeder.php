<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PhpOption\None;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //追加するパラメータ
        $param = [
            'id' => 1,
            'category_id' => 1,
            'brand_id' => 1,
            'item_name' => '腕時計',
            'description' => 'スタイリッシュなデザインのメンズ腕時計',
            'price' => 15000,
            'shipping_fee' => 500,
            'status' => '良好',
            'image_path' => 'Clock.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        //パラメータの挿入
        DB::table('items')->insert($param);

        $param = [
            'id' => 2,
            'category_id' => 2,
            'brand_id' => 2,
            'item_name' => 'HDD',
            'description' => '高速で信頼性の高いハードディスク',
            'price' => 5000,
            'shipping_fee' => 500,
            'status' => '目立った傷や汚れなし',
            'image_path' => 'Disk.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => 3,
            'category_id' => 3,
            'brand_id' => 4,
            'item_name' => '玉ねぎ3束',
            'description' => '新鮮な玉ねぎ3束のセット',
            'price' => 300,
            'shipping_fee' => 500,
            'status' => 'やや傷や汚れあり',
            'image_path' => 'Onions.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => 4,
            'category_id' => 1,
            //'brand_id' => null,
            'brand_id' => 4,
            'item_name' => '革靴',
            'description' => 'クラシックなデザインの革靴',
            'price' => 4000,
            'shipping_fee' => 500,
            'status' => '状態が悪い',
            'image_path' => 'Shoes.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => 5,
            'category_id' => 2,
            //'brand_id' => null,
            'brand_id' => 4,
            'item_name' => 'ノートPC',
            'description' => '高性能なノートパソコン',
            'price' => 45000,
            'shipping_fee' => 500,
            'status' => '良好',
            'image_path' => 'Laptop.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => 6,
            'category_id' => 5,
            'brand_id' => 4,
            'item_name' => 'マイク',
            'description' => '高音質のレコーディングマイク',
            'price' => 8000,
            'shipping_fee' => 500,
            'status' => '目立った傷や汚れなし',
            'image_path' => 'Mic.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => 7,
            'category_id' => 1,
            //'brand_id' => null,
            'brand_id' => 4,
            'item_name' => 'ショルダーバッグ',
            'description' => 'おしゃれなショルダーバッグ',
            'price' => 3500,
            'shipping_fee' => 500,
            'status' => 'やや傷や汚れなし',
            'image_path' => 'Pocket.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => 8,
            'category_id' => 4,
            'brand_id' => 4,
            'item_name' => 'タンブラー',
            'description' => '使いやすいタンブラー',
            'price' => 500,
            'shipping_fee' => 100,
            'status' => '状態が悪い',
            'image_path' => 'Tumbler.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => 9,
            'category_id' => 4,
            'brand_id' => 3,
            'item_name' => 'コーヒーミル',
            'description' => '手動のコーヒーミル',
            'price' => 4000,
            'shipping_fee' => 500,
            'status' => '良好',
            'image_path' => 'Grinder.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('items')->insert($param);

        $param = [
            'id' => 10,
            'category_id' => 6,
            //'brand_id' => null,
            'brand_id' => 4,
            'item_name' => 'メイクセット',
            'description' => '便利なメイクアップセット',
            'price' => 2500,
            'shipping_fee' => 500,
            'status' => '目立った傷や汚れなし',
            'image_path' => 'MakeSet.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('items')->insert($param);
    }


}
