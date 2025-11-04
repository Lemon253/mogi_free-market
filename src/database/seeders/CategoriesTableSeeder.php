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
            'category_name' => 'スマホ・タブレット・パソコン',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('categories')->insert($param);

        $param = [
            'id' => 3,
            'category_name' => '食品・飲料・酒',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('categories')->insert($param);

        $param = [
            'id' => 4,
            'category_name' => 'キッチン・日用品',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('categories')->insert($param);

        $param = [
            'id' => 5,
            'category_name' => 'オーディオ',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('categories')->insert($param);

        $param = [
            'id' => 6,
            'category_name' => '美容・コスメ',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('categories')->insert($param);

    }

}
