<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
            'item_name' => 'テスト',
            'description' => 'テスト',
            'price' => 1000,
            'shipping_fee' => 500,
            'status' => '良好',
            'image_path' => 'test',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        //パラメータの挿入
        DB::table('items')->insert($param);
    }
}
