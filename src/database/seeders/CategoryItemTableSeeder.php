<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryItemTableSeeder extends Seeder
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
            [
                'category_id' => 1,
                'item_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'item_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];
        //パラメータの挿入
        DB::table('category_item')->insert($param);

        $param = [
            'category_id' => 2,
            'item_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),

        ];
        DB::table('category_item')->insert($param);
    }
}
