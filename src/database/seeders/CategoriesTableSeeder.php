<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriesTableSeeder extends Seeder
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
            'category_name' => 'ファッション',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        //パラメータの挿入
        DB::table('categories')->insert($param);

        $param = [
            'id' => 2,
            'category_name' => '家電',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('categories')->insert($param);

        $param = [
            'id' => 3,
            'category_name' => 'インテリア',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('categories')->insert($param);

        $param = [
            'id' => 4,
            'category_name' => 'レディース',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('categories')->insert($param);

        $param = [
            'id' => 5,
            'category_name' => 'メンズ',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('categories')->insert($param);

        $param = [
            'id' => 6,
            'category_name' => 'コスメ',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('categories')->insert($param);

        $param = [
            'id' => 7,
            'category_name' => '本',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('categories')->insert($param);

        $param = [
            'id' => 8,
            'category_name' => 'ゲーム',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('categories')->insert($param);

        $param = [
            'id' => 9,
            'category_name' => 'スポーツ',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('categories')->insert($param);

        $param = [
            'id' => 10,
            'category_name' => 'キッチン',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('categories')->insert($param);

        $param = [
            'id' => 11,
            'category_name' => 'ハンドメイド',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('categories')->insert($param);

        $param = [
            'id' => 12,
            'category_name' => 'アクセサリー',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('categories')->insert($param);

        $param = [
            'id' => 13,
            'category_name' => 'おもちゃ',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('categories')->insert($param);

        $param = [
            'id' => 14,
            'category_name' => 'ベビー・キッズ',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('categories')->insert($param);
    }

}
